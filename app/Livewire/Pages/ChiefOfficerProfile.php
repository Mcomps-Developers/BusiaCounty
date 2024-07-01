<?php

namespace App\Livewire\Pages;

use App\Models\ChiefOfficer;
use Livewire\Component;

class ChiefOfficerProfile extends Component
{
    public $profile_id;
    public function render()
    {
        $officer = ChiefOfficer::findOrFail($this->profile_id);
        return view('livewire.pages.chief-officer-profile', ['officer' => $officer])->layout('layouts.base');
    }
}
