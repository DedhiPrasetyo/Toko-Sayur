<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login_function(){
        return view('pages.auth.login');
    }

    function login_proses_function(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|password',
        ]);

    }
}
