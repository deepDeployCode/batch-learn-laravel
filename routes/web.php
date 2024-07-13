<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogController::class, 'findBlog']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store']);

// Route::get('/authors/{user:username}', [UserController::class, 'index']);

// Route::get('/categories/{category:slug}', [CategoryController::class, 'index']);
