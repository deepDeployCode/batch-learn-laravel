<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function(){
    return view('about', ['title' => 'About Me']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Me']);
});