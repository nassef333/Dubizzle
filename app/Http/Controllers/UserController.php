<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:users',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ]);

        $user = new User();
        $user->role = $validatedData['role'];
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('admin.index')->with('success', 'admin created successfully.');
    }

    public function index()
    {
        $admins = User::all();
        return view('admin.admins.index', compact('admins'));
    }

    
    public function show(User $user)
    {
        return view('admins.show', compact('user'));
    }

    public function create()
    {
        return view('admin.admins.add-admin');
    }
    
    
    public function edit(User $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ]);
    
        $user->role = $validatedData['role'];
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();    

        return redirect()->route('admin.index')->with('success', 'admin updated successfully.');
    }
    
    
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'admin deleted successfully.');
    }
}
