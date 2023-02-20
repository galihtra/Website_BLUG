<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //login
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/');
        }

        return \redirect('/login');
    }

    //register
    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }
}
