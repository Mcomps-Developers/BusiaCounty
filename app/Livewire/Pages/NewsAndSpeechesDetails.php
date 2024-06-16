<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
use Livewire\Component;

class NewsAndSpeechesDetails extends Component
{
    public $reference;
    public function render()
    {
        $blog = Blog::where('reference', $this->reference)->first();
        return view('livewire.pages.news-and-speeches-details',['blog'=>$blog])->layout('layouts.base');
    }
}
