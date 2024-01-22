<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index() {
        if(!auth()->user()) {
            return view('login');
        }
        if(auth()->user()->role == 'bank') return view('bank.home');
        if(auth()->user()->role == 'shop') return view('shop.home');
        if(auth()->user()->role == 'student') return view('student.home');

        return view('login');
    }

    public function login(Request $request) {
        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->back()->with('status', 'Invalid credentials');
        }

        return redirect()->back();
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }
}
