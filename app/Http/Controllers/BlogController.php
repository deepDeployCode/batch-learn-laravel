<?php 

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController{
    public function index(){
        return view('blogs', ['title' => "Blog Page", 'blogs' => Blog::all()]);
    }

    public function findBlog(Blog $blog){
        return view('blog', ['title' => 'Single Post', 'blog' => $blog]);
    }
}