<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginIfNeeded']);
    }

    public function showLoginIfNeeded()
    {
        return view('auth.login');
    }

    public function login()
    {
        $crendetials = $this->validate(request(), [
            'matricula' => 'required|string',
            'password'  => 'required|string'
        ]);

        // Validate if it is user's first login

        if (Auth::attempt($crendetials)) {
            $user = Auth::user();
            $first_login = $user['first_login'];

            if ($first_login === 1) {
                return redirect()->route('updatepassword');
            }

            return redirect()->route('home');
        }

        return back()->withInput(request(['matricula']))
                     ->withErrors(['matricula' => 'Matricula incorrecta']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
