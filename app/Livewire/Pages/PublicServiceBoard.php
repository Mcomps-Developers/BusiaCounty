<?php

namespace App\Livewire\Pages;

use App\Models\PublicService;
use Livewire\Component;

class PublicServiceBoard extends Component
{
    public function render()
    {
        $content = PublicService::first();
        return view('livewire.pages.public-service-board',['content'=>$content])->layout('layouts.base');
    }
}
