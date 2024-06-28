<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class Tenders extends Component
{
    use WithPagination;
    public function render()
    {
        $tenders = Document::orderByDesc('created_at')->where('type', 'tender')->paginate(24);
        return view('livewire.pages.tenders',['tenders'=>$tenders])->layout('layouts.base');
    }
}
