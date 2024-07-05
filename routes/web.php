<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function(){
    return view('about', ['title' => 'About Me']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Me']);
});

Route::get('/blogs', function () {
    return view('blogs', ['title' => "Blog Page", 'blogs' => Blog::all()]);
});

Route::get('/blogs/{slug}', function($slug){
    $blog = Blog::find($slug);

    return view('blog', ['title' => 'Single Post', 'blog' => $blog]);
});