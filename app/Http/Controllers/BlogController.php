<?php 

namespace App\Http\Controllers;
use App\Models\Blog;

class BlogController{
    public function index(){
        $blog = Blog::latest();
        if(request('search')){
            $blog->where('title', 'like', '%'.request('search').'%');
        }
        return view('blogs', ['title' => "Blog Page", 'blogs' => $blog->paginate(5)]);
    }

    public function findBlog(Blog $blog){
        return view('blog', ['title' => 'Single Post', 'blog' => $blog]);
    }
}