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
        $validated['role'] = 'Customer';
        $validated['phone'] = '';
        $validated['province'] = '';
        $validated['city'] = '';
        $validated['subdistrict'] = '';
        $validated['village'] = '';
        $validated['address'] = '';
        $validated['zip'] = '';
        $validated['bio'] = '';

        User::create($validated);

        return redirect('/login')->with('success', 'Akun Anda telah terdaftar');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin');
            } elseif (Auth::user()->role === 'customer') {
                return redirect()->intended('/');
            }
        }

        return back()->with([
            'loginError' => 'Login Failed',
        ])->onlyInput('username');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
