<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        if (Auth::check())
        {
            return redirect(route('task.home'));
        }

        return view("auth.signin");
    }

    public function signup(Request $request)
    {
        if (Auth::check())
        {
            return redirect(route('task.home'));
        }

        return view("auth.signup");
    }

    public function signinAction(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (!Auth::attempt($data))
        {
            return redirect(route('auth.signin'));
        }

        return redirect(route('task.home'));
    }

    public function signupAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $req = $request->only('name', 'email', 'password');
        $req['password'] = Hash::make($req['password']);
        User::create($req);
        return redirect(route('auth.signin'));
    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::logout();
        }
        return redirect(route('auth.signin'));
    }
}
