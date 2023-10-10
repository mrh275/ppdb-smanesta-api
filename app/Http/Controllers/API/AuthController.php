<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            Auth::attempt($credentials);
            $user = User::where('username', $credentials['username'])->first();
            $token = $user->createToken('accessToken')->plainTextToken;
            return response()->json([
                'status' => 200,
                'message' => 'Login successfully!',
                'accessToken' => $token
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        session()->flush();

        return response()->json([
            'status' => 200,
            'message' => 'User logout successfully!'
        ]);
    }
}
