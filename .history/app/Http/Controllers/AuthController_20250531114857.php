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
       $credentials = $request->validate([
    'email' => ['required', 'email'],
    'password' => ['required', 'string'],
]);

if (Auth::attempt($credentials, $request->remember)) {
    $request->session()->regenerate();

    // 🔔 Başarı mesajı
    return redirect()->intended('/admin/participants')
        ->with('success', 'Giriş başarılı! Hoş geldiniz, ' . Auth::user()->name);
}

    // Kullanıcıyı çıkış yaptır
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
