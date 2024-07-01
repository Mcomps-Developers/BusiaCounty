<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Livewire\Component;

class ProjectDetails extends Component
{
    public $slug;
    public $reference;
    public function render()
    {
        $project = Project::where('reference', $this->reference)->first();
        $relatedProjects = Project::where('department_id', $project->department_id)->where('id', '!=', $project->id)->limit(8)->get();
        return view('livewire.pages.project-details', ['project' => $project, 'relatedProjects' => $relatedProjects])->layout('layouts.base');
    }
}
