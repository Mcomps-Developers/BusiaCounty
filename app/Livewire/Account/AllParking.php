<?php

namespace App\Livewire\Account;

use App\Models\DailyParking;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AllParking extends Component
{
    use WithPagination;
    public function render()
    {
        $dailyParking = DailyParking::orderByDesc('created_at')->where('user_id',Auth::id())->paginate(5);
        return view('livewire.account.all-parking', ['dailyParking' => $dailyParking])->layout('layouts.guest');
    }
}
