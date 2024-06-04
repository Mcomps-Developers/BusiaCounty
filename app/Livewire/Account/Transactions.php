<?php

namespace App\Livewire\Account;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Transactions extends Component
{
    use WithPagination;
    public function render()
    {
        $transactions = Transaction::orderByDesc('created_at')->paginate(10);
        return view('livewire.account.transactions', ['transactions' => $transactions])->layout('layouts.guest');
    }
}
