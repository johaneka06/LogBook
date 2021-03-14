<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function store(NewUser $request)
    {
        $request = $request->validated();

        $user = User::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'password' => bcrypt($request['password']),
            'remember_token' => Str::random(64)
        ]);

        Auth::attempt(['email' => $user->email, 'password' => $request['password']]);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(!Auth::attempt(['email' => $user['email'], 'password' => $request['password']])) {
            return redirect('/login')->withErrors('Wrong email/password');
        } else {
            return redirect('/');
        }
    }

}
