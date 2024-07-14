<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|max:255'
        ]);

        User::create($validatedData);

        session()->flash('success', 'Registration Success, Please Login');
        return redirect('/login');
    }
}
