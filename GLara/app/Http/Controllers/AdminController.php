<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function permissions()
    {
        return view('admin.permissions');
    }

    public function roles()
    {
        return view('admin.roles');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function menus()
    {
        return view('admin.menus');
    }

    public function categories()
    {
        return view('admin.categories');
    }

    public function media()
    {
        return view('admin.media');
    }
}


public function users()
{
    $users = User::all(); // Fetch all users from the database
    return view('admin.users', compact('users'));
}

public function createUser()
{
    return view('admin.add_user');
}

public function storeUser(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = new User;
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->save();

    return redirect()->route('admin.users')->with('success', 'User created successfully');
}

