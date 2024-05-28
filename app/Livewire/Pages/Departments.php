<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Departments extends Component
{
    public function render()
    {
        return view('livewire.pages.departments')->layout('layouts.base');
    }
}
