<?php

namespace App\Livewire\Pages;

use App\Models\ChiefOfficer;
use App\Models\Department;
use Livewire\Component;

class ChiefOfficers extends Component
{
    public function render()
    {
        $officers = ChiefOfficer::orderby('designation')->get();
        return view('livewire.pages.chief-officers', ['officers' => $officers])->layout('layouts.base');
    }
}
