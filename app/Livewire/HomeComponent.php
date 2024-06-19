<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Event;
use App\Models\HomeStats;
use App\Models\Slider;
use App\Models\WelcomeNote;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $recentBlogs = Blog::orderByDesc('created_at')->where('created_at', '<=', Carbon::now())->where('status', 'published')->limit(3)->get();
        $recentEvents = Event::orderByDesc('created_at')->limit(2)->get();
        $homeStats = HomeStats::first();
        $note = WelcomeNote::first();
        $sliders = Slider::where('status', 'active')->where('start_date', '<=', Carbon::now())->where('end_date', '>=', Carbon::now())->get();
        return view('livewire.home-component', ['sliders' => $sliders, 'recentBlogs' => $recentBlogs, 'recentEvents' => $recentEvents, 'homeStats' => $homeStats, 'note' => $note])->layout('layouts.base');
    }
}
