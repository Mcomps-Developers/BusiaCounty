<?php

namespace App\Livewire\Account;

use App\Models\Business;
use App\Models\License;
use App\Models\Market;
use App\Models\Subcounty;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddBusiness extends Component
{
    public $subcounty;
    public $ward;
    public $business_name;
    public $market;
    public $category;
    public $address;
    private $reference;
    protected $rules = [
        'subcounty' => 'required',
        'ward' => 'required',
        'business_name' => 'required',
        'market' => 'required',
        'category' => 'required',
        'address' => 'required',
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
            $existingBusiness = Business::where('reference', $randomCode)->first();
        } while ($existingBusiness);

        $this->reference = $randomCode;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);


    }

    public function addBusiness()
    {
        $this->validate();
        $this->generateUniqueCode();
        $business = new Business();
        $business->reference = $this->reference;
        $business->market_id = $this->market;
        $business->name = $this->business_name;
        $business->license_id = $this->category;
        $business->address = $this->address;
        $business->renewal_date = Carbon::today();
        $business->user_id = Auth::id();
        $business->save();
        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->success('Business created.');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        $subcounties = Subcounty::orderBy('name')->get();
        $wards = Ward::orderBy('name')->get();
        $markets = Market::orderBy('name')->get();
        $categories = License::orderBy('name')->get();
        return view('livewire.account.add-business', ['subcounties' => $subcounties, 'wards' => $wards, 'markets' => $markets, 'categories' => $categories, 'categories' => $categories])->layout('layouts.guest');
    }
}
