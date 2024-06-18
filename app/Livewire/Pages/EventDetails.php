<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Livewire\Component;

class EventDetails extends Component
{
    public $slug;
    public $reference;

    public function render()
    {
        $event = Event::where('reference', $this->reference)->first();
        return view('livewire.pages.event-details', ['event' => $event])->layout('layouts.base');
    }
}
