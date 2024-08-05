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
