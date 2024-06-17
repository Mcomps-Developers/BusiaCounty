<?php

namespace App\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $recentBlogs = Blog::orderByDesc('created_at')->where('created_at', '<=', Carbon::now())->where('status', 'published')->limit(3)->get();
        return view('livewire.home-component', ['recentBlogs' => $recentBlogs])->layout('layouts.base');
    }
}
