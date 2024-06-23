<?php

namespace App\Livewire\Elements;

use App\Models\BlogCategory;
use App\Models\Department;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $departments = Department::orderBy('title')->get();
        $categories = BlogCategory::orderBy('name')->get();
        return view('livewire.elements.header', ['departments' => $departments, 'categories' => $categories]);
    }
}
