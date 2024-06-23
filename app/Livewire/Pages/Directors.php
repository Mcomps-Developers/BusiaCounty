<?php

namespace App\Livewire\Pages;

use App\Models\Directorate;
use Livewire\Component;

class Directors extends Component
{
    public function render()
    {
        $directors = Directorate::orderBy('title')->get();
        return view('livewire.pages.directors', ['directors' => $directors])->layout('layouts.base');
    }
}
