<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class DeputyGovernor extends Component
{
    public function render()
    {
        $deputyGovernor = DeputyGovernor::first();
        return view('livewire.pages.deputy-governor', ['deputyGovernor' => $deputyGovernor])->layout('layouts.base');
    }
}
