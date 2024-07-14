<?php 

namespace App\Http\Controllers;
use App\Models\User;

class UserController{
    public function index(User $user){
        return view('blogs', ['title' => 'Articles By '.$user->name, 'blogs' => $user->blogs]);
    }
}