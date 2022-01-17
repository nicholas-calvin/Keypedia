<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|email:dns',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required',
            'dob' => 'required'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        return redirect('/login')->with('success', 'User registered successfully');
    }
}
