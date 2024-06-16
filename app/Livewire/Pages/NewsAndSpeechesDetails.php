<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;

class NewsAndSpeechesDetails extends Component
{
    public $reference;
    public function render()
    {
        $blog = Blog::where('reference', $this->reference)->first();
        $blog->views = $blog->views + 1;
        $blog->save();
        $categories = BlogCategory::orderBy('name')->get();
        $relatedBlogs = Blog::orderByDesc('created_at')->where('category_id', $blog->category_id)->limit(3)->get();
        return view('livewire.pages.news-and-speeches-details', ['blog' => $blog, 'categories' => $categories, 'relatedBlogs' => $relatedBlogs])->layout('layouts.base');
    }
}
