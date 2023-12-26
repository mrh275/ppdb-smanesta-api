<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('adminDashboard');
        }
        $data = [
            'title' => 'Login Admin | PPDB SMA Negeri 1 Rawamerta'
        ];

        return view('admin.auth.login', $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->first();
        if ($user) {
            try {
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return response()->json([
                        'status' => 200,
                        'message' => 'Login successfully!',
                    ]);
                } else {
                    return response()->json([
                        'status' => 400,
                        'message' => "Kata sandi yang anda masukan salah!."
                    ]);
                }
            } catch (Exception $error) {
                return response()->json([
                    'status' => $error->getCode(),
                    'message' => $error->getMessage()
                ]);
            }
        } else {
            return response()->json([
                'status' => 400,
                'message' => "Username yang anda masukan salah!."
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        session()->flush();

        return redirect()->route('portal');
    }
}
