<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class CountyTreasury extends Component
{
    use WithPagination;
    public function render()
    {
        $documents = Document::orderByDesc('created_at')->where('type', 'budget')->paginate(24);
        return view('livewire.pages.county-treasury', ['documents' => $documents])->layout('layouts.base');
    }
}
