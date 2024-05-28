<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class DepartmentDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.department-details')->layout('layouts.base');
    }
}
