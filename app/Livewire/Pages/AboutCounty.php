<?php

namespace App\Livewire\Pages;

use App\Models\About;
use Livewire\Component;

class AboutCounty extends Component
{
    public function render()
    {
        $content = About::first();
        return view('livewire.pages.about-county', ['content' => $content])->layout('layouts.base');
    }
}
