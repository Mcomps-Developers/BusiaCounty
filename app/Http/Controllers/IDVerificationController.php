<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IDVerificationController extends Controller
{
    public function verify(Request $request)
    {
        try {
            $idNumber = $request->input('id_number');

            // Make a POST request to the Youverify API for National ID verification
            $response = Http::withHeaders([
                'token' => env('YOUVERIFY_SANDBOX_PUBLIC_MERCHANT_KEY')
            ])->post('https://api.sandbox.youverify.co/v2/api/identity/ke/national-id', [
                        'id' => $idNumber,
                        'isSubjectConsent' => true,
                        'metadata' => [
                            'requestId' => uniqid() // Generate a unique request ID
                        ]
                    ]);

            if ($response->successful()) {
                $data = $response->json();

                return response()->json([
                    'success' => true,
                    'data' => $data,
                ]);
            } else {
                Log::error('ID verification failed: ' . $response->body());
                return response()->json([
                    'success' => false,
                    'message' => 'ID verification failed.',
                ]);
            }
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Error during ID verification: ' . $e->getMessage());

            // Return a generic error response
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during ID verification.',
            ]);
        }
    }

}
