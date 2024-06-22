<?php

namespace App\Livewire\Pages;

use App\Models\Department;
use App\Models\Directorate;
use Livewire\Component;

class DepartmentDetails extends Component
{
    public $slug;
    public function render()
    {
        $department = Department::where('slug', $this->slug)->first();
        $departments = Department::orderBy('title')->get();
        $directors = Directorate::orderBy('title')->get();
        return view('livewire.pages.department-details', ['department' => $department, 'departments' => $departments, 'directors' => $directors])->layout('layouts.base');
    }
}
