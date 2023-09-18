<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255|min:8',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/admin/dashboard');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'message' => 'Invalid credentials.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('/admin/login');
    }
}
