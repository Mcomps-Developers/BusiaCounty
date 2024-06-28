<?php

namespace App\Livewire\Elements;

use App\Models\BlogCategory;
use App\Models\Department;
use App\Models\Municipality;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $departments = Department::orderBy('title')->get();
        $categories = BlogCategory::orderBy('name')->get();
        $mucipality = Municipality::orderBy('name')->get();
        return view('livewire.elements.header', ['departments' => $departments, 'categories' => $categories,'mucipality'=>$mucipality]);
    }
}
