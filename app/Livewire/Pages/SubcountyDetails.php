<?php

namespace App\Livewire\Pages;

use App\Models\Ward;
use Livewire\Component;

class SubcountyDetails extends Component
{
    public function render()
    {
        $wards = Ward::orderBy('name')->get();
        return view('livewire.pages.subcounty-details', ['wards' => $wards])->layout('layouts.base');
    }
}
