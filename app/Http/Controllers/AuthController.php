<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function testLogin(Request $request)
    {
        $email = $request->query('email');
        $password = $request->query('password');

        $credentials = ['email' => $email, 'password' => $password];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return response()->json([
                'success' => true, // Campo para indicar éxito
                'name' => $user->name
            ]);
        }

        return response()->json([
            'success' => false, // Campo para indicar fallo
            'error' => 'Unauthorized'
        ], 401);
    }

    public function testLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully']);
    }

    public function testUser(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json(['name' => $user->name]);
        }

        return response()->json(['error' => 'Unauthenticated'], 401);
    }
}
