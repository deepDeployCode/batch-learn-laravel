<?php
namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController{
    public function index(Category $category){
        return view('blogs', ['title' => $category->name, 'blogs' => $category->blogs]);
    }
}