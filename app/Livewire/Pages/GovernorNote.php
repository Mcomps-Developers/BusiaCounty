<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class GovernorNote extends Component
{
    public function render()
    {
        return view('livewire.pages.governor-note')->layout(('layouts.base'));
    }
}
