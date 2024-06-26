<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    public function render()
    {
        $projects = Project::orderBy('title')->paginate(12);
        return view('livewire.pages.projects',['projects'=>$projects])->layout('layouts.base');
    }
}
