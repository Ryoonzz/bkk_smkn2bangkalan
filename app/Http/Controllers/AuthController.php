<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            if ($credentials['role'] == 'admin') {
                return redirect('/dashboard');
            } elseif ($credentials['role'] == 'alumni') {
                return redirect('/dashboard-alumni');
            }
        }

        return back()->withErrors(['login' => 'Email atau password salah']);

        // if(Auth::attempt($request->only('username', 'password')))
        // {
        //     return redirect('/dashboard');
        // }

        // return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
