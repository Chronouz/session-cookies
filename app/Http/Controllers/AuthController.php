<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('session.login');
    }

    public function login(Request $request)
    {
        $request->validate(['username' => 'required']);
        session(['username' => $request->username]);
        return redirect('/dashboard');
    }

    public function dashboard()
    {
        $username = session('username');
        return view('session.dashboard', compact('username'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }
}