<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class LoginController extends Controller
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
        $token = $request->bearerToken();
        $currentToken = PersonalAccessToken::findToken($token);
        $currentToken->delete();
        return response()->json([
            'status' => 200,
            'message' => 'User logout successfully!'
        ]);
    }
}
