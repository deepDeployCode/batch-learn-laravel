<?php 

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Http\Controllers\Controller;

class BlogController{
    public function index(){
        return view('blogs', ['title' => "Blog Page", 'blogs' => Blog::all()]);
    }

    public function findBlog(Blog $blog){
        // $blog = Blog::find($slug);
        return view('blog', ['title' => 'Single Post', 'blog' => $blog]);
    }
}