<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ContactController{
    public function index(){
        return view('contact', ['title' => 'Contact Me']);
    }
}