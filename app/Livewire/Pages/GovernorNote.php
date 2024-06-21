<?php

namespace App\Livewire\Pages;

use App\Models\Governor;
use Livewire\Component;

class GovernorNote extends Component
{
    public function render()
    {
        $Governor = Governor::first();
        return view('livewire.pages.governor-note', ['Governor' => $Governor])->layout(('layouts.base'));
    }
}
