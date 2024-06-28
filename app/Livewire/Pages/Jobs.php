<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class Jobs extends Component
{
    use WithPagination;
    public function render()
    {
        $collection = Document::orderByDesc('created_at')->where('type', 'vacancy')->paginate(24);
        return view('livewire.pages.jobs', ['collection' => $collection])->layout('layouts.base');
    }
}
