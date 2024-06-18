<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class EventDetails extends Component
{
    public $slug;
    public $reference;
    public function render()
    {
        return view('livewire.pages.event-details')->layout('layouts.base');
    }
}
