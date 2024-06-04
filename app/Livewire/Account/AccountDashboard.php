<?php

namespace App\Livewire\Account;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AccountDashboard extends Component
{
    use WithPagination;
    public function render()
    {
        $businesses = Business::orderBy('renewal_date')->where('user_id', Auth::id())->get();
        return view('livewire.account.account-dashboard', ['businesses' => $businesses])->layout('layouts.guest');
    }
}
