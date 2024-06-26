<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Formlogin()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('auth.login');
    }

    public function login(Request $request)
    {

         $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return to_route('auth.login')->withErrors([
            'email' => 'invalide credentials'
        ])->onlyInput('email');
    }
}
