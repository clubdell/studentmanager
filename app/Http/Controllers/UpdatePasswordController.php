<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'showUpdatePassword']);
    }

    public function showUpdatePassword()
    {
        return view('auth.updatepassword');
    }

    public function updatePassword()
    {
        $crendetials = $this->validate(request(), [
            'password' => 'required|string'
        ]);

        $current_user = Auth::user();
        $new_password = bcrypt($crendetials['password']);
        $current_status = $current_user['first_login'];

        $current_status = 0;

        $current_user->save();

        return $current_status;
    }
}