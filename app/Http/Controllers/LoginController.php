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
        if (empty(Auth::user()->name)) {
            return view('login');
        } else {
            return redirect('/admin');
        }

    }

    public function loginproses(Request $request){
        if (Auth::attempt($request->only('username','password'))) {
            return redirect('/admin');
        }

        return redirect('/');
    }

    //register (tidak dipakai)
    // public function register(){
    //     return view('register');
    // }
    // public function registeruser(Request $request){
    //     User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //     ]);

    //     return redirect('/');
    // }

    //logout
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
