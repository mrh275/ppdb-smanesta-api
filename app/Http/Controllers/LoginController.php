<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            Auth::attempt($credentials);
            return response()->json([
                'status' => 200,
                'message' => 'Login successfully!'
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('portal');
    }
}
