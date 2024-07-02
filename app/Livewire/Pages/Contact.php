<?php

namespace App\Livewire\Pages;

use App\Models\Department;
use Livewire\Component;

class Contact extends Component
{
    public $message;
    public function render()
    {
        $departments = Department::orderBy('title')->where('slug','!=','governorship')->get();
        return view('livewire.pages.contact',['departments'=>$departments])->layout('layouts.base');
    }
}
