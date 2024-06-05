<?php

namespace App\Livewire\Account;

use App\Models\Business;
use Livewire\Component;

class ManageBusiness extends Component
{
    public $reference;
    public function mount($reference)
    {
        $this->reference = $reference;


    }
    public function render()
    {
        $business = Business::where('reference', $this->reference)->first();
        return view('livewire.account.manage-business', ['business' => $business])->layout('layouts.guest');
    }
}
