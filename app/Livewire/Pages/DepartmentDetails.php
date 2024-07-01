<?php

namespace App\Livewire\Pages;

use App\Models\ChiefOfficer;
use App\Models\Department;
use App\Models\Directorate;
use App\Models\Project;
use Livewire\Component;

class DepartmentDetails extends Component
{
    public $slug;
    public function render()
    {
        $department = Department::where('slug', $this->slug)->first();
        $departments = Department::orderBy('title')->get();
        $directors = Directorate::orderBy('title')->where('department_id', $department->id)->get();
        $projects = Project::orderBy('title')->where('department_id', $department->id)->paginate(12);
        $officers = ChiefOfficer::orderby('designation')->where('department_id', $department->id)->get();
        return view('livewire.pages.department-details', ['officers' => $officers, 'projects' => $projects, 'department' => $department, 'departments' => $departments, 'directors' => $directors])->layout('layouts.base');
    }
}
