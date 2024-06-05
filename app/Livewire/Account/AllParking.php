<?php

namespace App\Livewire\Account;

use App\Models\DailyParking;
use Livewire\Component;
use Livewire\WithPagination;

class AllParking extends Component
{
    use WithPagination;
    public function render()
    {
        $dailyParking = DailyParking::orderByDesc('created_at')->paginate(5);
        return view('livewire.account.all-parking', ['dailyParking' => $dailyParking])->layout('layouts.guest');
    }
}
