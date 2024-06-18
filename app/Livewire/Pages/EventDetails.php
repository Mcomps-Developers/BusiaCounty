<?php

namespace App\Livewire\Pages;

use App\Models\Event;
use App\Models\EventCategory;
use Livewire\Component;

class EventDetails extends Component
{
    public $slug;
    public $reference;

    public function mount($reference)
    {
        $this->reference = $reference;
    }

    public function render()
    {
        $event = Event::orderByDesc('created_at')->where('reference', $this->reference)->first();
        $featuredEvent = Event::orderByDesc('created_at')->where('featured', true)->limit(1)->get();
        $eventCategories = EventCategory::orderBy('name')->get();
        $relatedEvents = Event::orderByDesc('created_at')->where('cat_id', $event->cat_id)->where('id', '!=', $event->id)->limit(4)->get();
        return view('livewire.pages.event-details', ['relatedEvents' => $relatedEvents, 'event' => $event, 'featuredEvent' => $featuredEvent, 'eventCategories' => $eventCategories])->layout('layouts.base');
    }
}
