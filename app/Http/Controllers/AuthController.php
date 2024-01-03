<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function reset_pass()
    {
        return view('auth.reset');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|min:3|max:255|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);
        
        return redirect('/login')->with('success', 'Akun Anda telah terdaftar');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
 
        return back()->with([
            'loginError' => 'Login Failed',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}
