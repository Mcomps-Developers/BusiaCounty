<?php

namespace App\Livewire\Pages;

use App\Models\DeputyGovernor;
use App\Models\Governor;
use Livewire\Component;

class GovernorNote extends Component
{
    public function render()
    {
        $Governor = Governor::first();
        $deputyGovernor = DeputyGovernor::first();
        return view('livewire.pages.governor-note', ['Governor' => $Governor, 'deputyGovernor' => $deputyGovernor])->layout(('layouts.base'));
    }
}
