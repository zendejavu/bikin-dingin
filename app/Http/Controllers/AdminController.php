<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', ['users' => $users]);
    }

    public function account()
    {
        $id = Auth::id();
        $my_account = User::find($id);
        return view('admin.account', ['user' => $my_account]);
    }

    public function inbox()
    {
        return view('admin.inbox');
    }

    public function read_mail()
    {
        return view('admin.read_mail');
    }

    public function chat()
    {
        return view('admin.chat');
    }
}
