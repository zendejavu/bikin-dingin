<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $role = Role::all();
        // return view('roles.index', compact('role'));
        return view('index');
    }
}
