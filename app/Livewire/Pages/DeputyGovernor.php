<?php

namespace App\Livewire\Pages;

use App\Models\DeputyGovernor as ModelsDeputyGovernor;
use Livewire\Component;

class DeputyGovernor extends Component
{
    public function render()
    {
        $deputyGovernor = ModelsDeputyGovernor::first();
        return view('livewire.pages.deputy-governor', ['deputyGovernor' => $deputyGovernor])->layout('layouts.base');
    }
}
