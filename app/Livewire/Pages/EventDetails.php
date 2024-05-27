<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class EventDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.event-details')->layout('layouts.base');
    }
}
