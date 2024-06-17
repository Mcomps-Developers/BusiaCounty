<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class NewsAndSpeeches extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::orderByDesc('created_at')->where('created_at', '<=', Carbon::now())->paginate(12);
        return view('livewire.pages.news-and-speeches', ['blogs' => $blogs])->layout('layouts.base');
    }
}
