<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsPerTag extends Component
{
    use WithPagination;
    public $tag;
    public function render()
    {
        $blogs = Blog::where('tags', 'LIKE', "%{$this->tag}%")->paginate(12);
        return view('livewire.blog.blogs-per-tag', ['blogs' => $blogs])->layout('layouts.base');
    }
}
