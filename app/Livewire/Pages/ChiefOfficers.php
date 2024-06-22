<?php

namespace App\Livewire\Pages;

use App\Models\Department;
use Livewire\Component;

class ChiefOfficers extends Component
{
    public function render()
    {
        $departments = Department::orderby('title')->get();
        return view('livewire.pages.chief-officers', ['departments' => $departments])->layout('layouts.base');
    }
}
