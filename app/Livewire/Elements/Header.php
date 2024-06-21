<?php

namespace App\Livewire\Elements;

use App\Models\Department;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $departments = Department::orderBy('title')->get();
        return view('livewire.elements.header', ['departments' => $departments]);
    }
}
