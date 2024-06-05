<?php

namespace App\Livewire\Account;

use Livewire\Component;

class ParkingDetails extends Component
{
    public function render()
    {
        return view('livewire.account.parking-details')->layout('layouts.eservice');
    }
}
