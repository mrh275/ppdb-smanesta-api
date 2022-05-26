<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('portal');
        }

        return redirect()->route('login')->withErrors(['username' => 'Username atau password salah']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('portal');
    }
}
