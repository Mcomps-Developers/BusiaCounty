<?php

namespace App\Livewire\Pages;

use App\Models\Subcounty;
use Livewire\Component;

class Subcounties extends Component
{
    public function render()
    {
        $subcounties = Subcounty::orderBy('name')->get();
        return view('livewire.pages.subcounties', ['subcounties' => $subcounties])->layout('layouts.base');
    }
}
