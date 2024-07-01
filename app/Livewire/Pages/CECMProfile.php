<?php

namespace App\Livewire\Pages;

use App\Models\Department;
use Livewire\Component;

class CECMProfile extends Component
{
    public $profile_id;
    public function render()
    {
        $cecm = Department::findOrFail($this->profile_id);
        return view('livewire.pages.c-e-c-m-profile',['cecm'=>$cecm])->layout('layouts.base');
    }
}
