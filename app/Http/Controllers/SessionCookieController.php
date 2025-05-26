<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionCookieController extends Controller
{
    // 1. Set session
    public function setSession()
    {
        session(['nama' => 'Andi', 'role' => 'admin']);
        return redirect('/get-session');
    }

    // 2. Get session
    public function getSession(Request $request)
    {
        $nama = session('nama');
        $role = session('role');
        $pesan = session('pesan');
        return view('session.get-session', compact('nama', 'role', 'pesan'));
    }

    // 3. Clear session
    public function clearSession()
    {
        session()->forget(['nama', 'role']);
        session()->flash('pesan', 'Data session telah dihapus.');
        return redirect('/get-session');
    }

    // 4. Set cookie
    public function setCookie()
    {
        return response('Cookie theme disimpan.')
            ->cookie('theme', 'dark', 60);
    }

    // 5. Get cookie
    public function getCookie(Request $request)
    {
        $theme = $request->cookie('theme');
        return view('session.get-cookie', compact('theme'));
    }

    // 6. Visit counter
    public function visit(Request $request)
    {
        $count = $request->cookie('visit_count', 0) + 1;
        return response("Anda telah mengunjungi halaman ini sebanyak $count kali.")
            ->cookie('visit_count', $count, 60);
    }
}