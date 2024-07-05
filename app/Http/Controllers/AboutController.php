<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AboutController{
    public function index(){
        return view('about', ['title' => 'About Me']);
    }
}