<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{

    use Authenticatable;
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|min:5|max:50',
            'password' => 'required|string|min:6|max:255',
        ]);
    
        $username = $validatedData['username'];
    
        $admin = Admin::where('username', $username)->first();
    
        if (!$admin || !Hash::check($validatedData['password'], $admin->password)) {
            return redirect()->back()->withErrors([
                'credentials' => 'Invalid username or password.',
            ])->withInput();
        }
    
        Auth::guard('admin')->login($admin);
        return redirect()->intended('/admin/dashboard');
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
