<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsPerCategory extends Component
{
    use WithPagination;
    public $slug;
    public function render()
    {
        $category = BlogCategory::where('slug', $this->slug)->first();
        $blogs = Blog::where('category_id', $category->id)->paginate(12);
        return view('livewire.blog.blogs-per-category', ['blogs' => $blogs, 'category' => $category])->layout('layouts.base');
    }
}
