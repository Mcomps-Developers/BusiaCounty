<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use App\Models\PublicService;
use Livewire\Component;
use Livewire\WithPagination;

class PublicServiceBoard extends Component
{
    use WithPagination;
    public function render()
    {
        $content = PublicService::first();
        $tenders = Document::orderByDesc('created_at')->where('type', 'tender')->paginate(24);
        return view('livewire.pages.public-service-board',['content'=>$content,'tenders'=>$tenders])->layout('layouts.base');
    }
}
