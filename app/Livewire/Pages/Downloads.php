<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use App\Models\Folder;
use Livewire\Component;
use Livewire\WithPagination;

class Downloads extends Component
{
    use WithPagination;
    public function render()
    {
        $collection = Document::orderByDesc('created_at')->paginate(24);
        $folders = Folder::orderBy('name')->get();
        return view('livewire.pages.downloads', ['folders'=>$folders,'collection' => $collection])->layout('layouts.base');
    }
}
