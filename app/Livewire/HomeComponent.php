<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $recentBlogs = Blog::orderByDesc('created_at')->where('created_at', '<=', Carbon::now())->where('status', 'published')->limit(3)->get();
        $recentEvents = Event::orderByDesc('created_at')->limit(2)->get();
        return view('livewire.home-component', ['recentBlogs' => $recentBlogs, 'recentEvents' => $recentEvents])->layout('layouts.base');
    }
}
