<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'findBlog']);

Route::get('/authors/{user:username}', [UserController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'index']);
