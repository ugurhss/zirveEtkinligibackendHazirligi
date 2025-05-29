<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function showLoginForm()
    {
        return view('auth.login'); // login blade sayfası
    }

    public function login(Request $request)
    {
        // Validation
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Giriş denemesi
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/contact'); // giriş sonrası yönlendirilecek yer
        }

        // Giriş başarısızsa
        return back()->withErrors([
            'username' => 'Sağlanan bilgiler kayıtlarımızla uyuşmuyor.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
