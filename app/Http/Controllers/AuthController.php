<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('session.login');
    }

    public function login(Request $request)
    {
        $request->validate(['username' => 'required']);
        $user = User::where('username', $request->username)->first();
        if ($user) {
            session(['username' => $user->username]);
            return redirect('/dashboard');
        }
        return back()->withErrors(['username' => 'User tidak ditemukan']);
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