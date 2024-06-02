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
    // public function verify(Request $request)
    // {
    //     try {
    //         // Extract input parameters
    //         $idNumber = $request->input('id_number');
    //         $firstName = $request->input('first_name');
    //         $lastName = $request->input('last_name');

    //         // Make the verification request to IDMerit API
    //         $response = Http::withHeaders([
    //             'Authorization' => 'Bearer ' . env('IDMERIT_ACCESS_TOKEN'),
    //             'accept' => '*/*'
    //         ])->post('https://gw.idmerit.com/ke-1/2.1', [
    //             'query' => [
    //                 'first_name' => $firstName,
    //                 'last_name' => $lastName,
    //                 'id_type' => 3, // Assuming ID type 3 corresponds to the national ID
    //                 'id_num' => $idNumber,
    //                 'request_id' => uniqid() // Generate a unique request ID
    //             ]
    //         ]);

    //         // Parse the response to extract match status
    //         $responseData = json_decode($response->body(), true);

    //         // Check if the response data is valid
    //         if (!isset($responseData['data'])) {
    //             Log::error('Invalid response data: ' . json_encode($responseData));
    //             throw new \Exception('Invalid response data');
    //         }

    //         // Extract match status for first name, last name, and ID number
    //         $firstNameMatch = $responseData['data']['first_name']['result'] === 'Match';
    //         $lastNameMatch = $responseData['data']['last_name']['result'] === 'Match';
    //         $idNumberMatch = $responseData['data']['id_num']['result'] === 'Match';

    //         // Decide whether to register the user based on match status
    //         if ($firstNameMatch && $lastNameMatch && $idNumberMatch) {
    //             // All fields match, proceed with user registration
    //             // Your registration logic here...
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'User registration successful.',
    //             ]);
    //         } else {
    //             // At least one field does not match, do not register the user
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'User registration failed. Identity verification failed.',
    //                 'match_status' => [
    //                     'first_name' => $firstNameMatch,
    //                     'last_name' => $lastNameMatch,
    //                     'id_number' => $idNumberMatch,
    //                 ]
    //             ]);
    //         }
    //     } catch (\Exception $e) {
    //         // Log and handle exceptions
    //         Log::error('Error during ID verification: ' . $e->getMessage());

    //         return response()->json([
    //             'success' => false,
    //             'message' => 'An error occurred during ID verification.',
    //         ]);
    //     }
    // }

}
