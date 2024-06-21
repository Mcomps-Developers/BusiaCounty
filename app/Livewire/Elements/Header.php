<?php

namespace App\Livewire\Elements;

use App\Models\Department;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $departments = Department::orderBy('name')->get();
        return view('livewire.elements.header', ['departments' => $departments]);
    }
}
