<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;

class BlogPerTagDetails extends Component
{
    public $tag;
    public $slug;
    public $reference;
    public function render()
    {
        $blog = Blog::where('reference', $this->reference)->first();
        $blog->views = $blog->views + 1;
        $blog->save();
        $categories = BlogCategory::orderBy('name')->get();
        $relatedBlogs = Blog::orderByDesc('created_at')->where('category_id', $blog->category_id)->limit(3)->get();
        return view('livewire.blog.blog-per-tag-details', ['blog' => $blog, 'categories' => $categories, 'relatedBlogs' => $relatedBlogs])->layout('layouts.base');
    }
}
