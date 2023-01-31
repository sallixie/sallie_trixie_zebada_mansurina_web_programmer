<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect("/dashboard");
        }

        return back()->with('message', 'email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
