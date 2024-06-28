<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class Downloads extends Component
{
    use WithPagination;
    public function render()
    {
        $collection = Document::orderByDesc('created_at')->paginate(24);
        return view('livewire.pages.downloads')->layout('layouts.base');
    }
}
