<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class Budget extends Component
{
    use WithPagination;
    public function render()
    {
        $budgets = Document::orderByDesc('created_at')->where('type', 'tender')->paginate(24);
        return view('livewire.pages.budget',['budgets'=>$budgets])->layout('layouts.base');
    }
}
