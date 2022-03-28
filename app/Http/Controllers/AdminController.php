<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credential = $request->only('email', 'password');
            // dd($credential);
            if (Auth::attempt($credential)) {
                // return 'done';
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->withErrors('Invalid Credentials !!!');
            }
        }
        return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged Out !!!');
    }
}
