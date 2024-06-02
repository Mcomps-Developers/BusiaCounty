<?php

namespace App\Livewire\Account;

use Livewire\Component;

class AccountDashboard extends Component
{
    public function render()
    {
        return view('livewire.account.account-dashboard')->layout('layouts.guest');
    }
}
