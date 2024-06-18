<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;
    public function render()
    {
        $events = Event::orderByDesc('created_at')->paginate(12);
        return view('livewire.pages.events', ['events' => $events])->layout('layouts.base');
    }
}
