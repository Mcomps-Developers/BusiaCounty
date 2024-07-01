<?php

namespace App\Livewire\Pages;

use App\Models\ChiefOfficer;
use App\Models\Department;
use Livewire\Component;

class ChiefOfficers extends Component
{
    public function render()
    {
        $department = Department::where('slug', '!=', 'governorship')->first();
        $officers = ChiefOfficer::orderby('designation')->where('department_id', '!=', $department->id)->get();
        return view('livewire.pages.chief-officers', ['officers' => $officers])->layout('layouts.base');
    }
}
