<?php

namespace App\Livewire\Account;

use App\Models\DailyParking;
use App\Models\Vehicle;
use App\Models\Zone;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Parking extends Component
{
    public $parking_zone;
    public $vehicle_type;
    public $vehicle_registration_number;
    public $parking_date;
    private $reference;
    private $serial;

    protected $rules = [
        'parking_zone' => 'required',
        'vehicle_type' => 'required',
        'parking_date'=>'required',
        'vehicle_registration_number' => 'required',
    ];
    public function generateUniqueCode()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codeLength = 8;
        $randomCode = '';

        do {
            // Generate random code
            $randomCode = '';
            for ($i = 0; $i < $codeLength; $i++) {
                $randomCode .= $characters[rand(0, strlen($characters) - 1)];
            }
            // Check if the code already exists in the database
            $existingBusiness = DailyParking::where('reference', $randomCode)->first();
        } while ($existingBusiness);

        $this->reference = $randomCode;
    }
    public function generateSerial()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codeLength = 16;
        $randomCode = '';

        do {
            // Generate random code
            $randomCode = '';
            for ($i = 0; $i < $codeLength; $i++) {
                $randomCode .= $characters[rand(0, strlen($characters) - 1)];
            }
            // Check if the code already exists in the database
            $existingBusiness = DailyParking::where('serial', $randomCode)->first();
        } while ($existingBusiness);

        $this->serial = $randomCode;
    }
    public function addParking()
    {
        $this->validate();
        $this->generateUniqueCode();
        $this->generateSerial();
        $parking = new DailyParking();
        $parking->reference = $this->reference;
        $parking->serial = $this->serial;
        $parking->vehicle_id = $this->vehicle_type;
        $parking->zone_id = $this->parking_zone;
        $parking->parking_date = $this->parking_date;
        $parking->plate_number = $this->vehicle_registration_number;
        $parking->user_id = Auth::id();
        $parking->save();
        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->success('Parking Application successful, pay to complete the process.');
        return redirect()->route('daily.parking.pay',[$parking->reference]);
    }
    public function render()
    {
        $vehicleTypes = Vehicle::orderBy('name')->get();
        $zones = Zone::orderBy('name')->get();
        return view('livewire.account.parking', ['vehicleTypes' => $vehicleTypes, 'zones' => $zones])->layout('layouts.guest');
    }
}
