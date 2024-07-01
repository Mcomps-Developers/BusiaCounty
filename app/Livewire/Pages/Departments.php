<?php

namespace App\Livewire\Pages;

use App\Models\Department;
use Livewire\Component;

class Departments extends Component
{
    public function render()
    {
        $departments = Department::orderBy('title')->where('slug','!=','governorship')->get();
        return view('livewire.pages.departments', ['departments' => $departments])->layout('layouts.base');
    }
}
