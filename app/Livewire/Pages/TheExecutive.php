<?php

namespace App\Livewire\Pages;

use App\Models\DeputyGovernor;
use App\Models\Governor;
use Livewire\Component;

class TheExecutive extends Component
{
    public function render()
    {
        $deputyGovernor = DeputyGovernor::first();
        $governor = Governor::first();
        return view('livewire.pages.the-executive', ['deputyGovernor' => $deputyGovernor, 'governor' => $governor])->layout('layouts.base');
    }
}
