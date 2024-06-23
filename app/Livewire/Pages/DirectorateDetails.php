<?php

namespace App\Livewire\Pages;

use App\Models\Directorate;
use Livewire\Component;

class DirectorateDetails extends Component
{
    public $dir_id;
    public function render()
    {
        $directorate = Directorate::findOrFail($this->dir_id)->first();
        return view('livewire.pages.directorate-details', ['directorate' => $directorate])->layout('layouts.app');
    }
}
