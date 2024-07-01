<?php

namespace App\Livewire\Pages;

use App\Models\ChiefOfficer;
use App\Models\Department;
use App\Models\DeputyGovernor;
use App\Models\Directorate;
use App\Models\Governor;
use Livewire\Component;

class GovernorNote extends Component
{
    public function render()
    {
        $Governor = Governor::first();
        $deputyGovernor = DeputyGovernor::first();
        $department = Department::where('slug', 'governorship')->first();
        $officers = ChiefOfficer::orderby('designation')->where('department_id', $department->id)->get();
        $directors = Directorate::orderBy('title')->where('department_id', $department->id)->get();
        return view('livewire.pages.governor-note', ['directors'=>$directors,'officers'=>$officers,'department' => $department, 'Governor' => $Governor, 'deputyGovernor' => $deputyGovernor])->layout(('layouts.base'));
    }
}
