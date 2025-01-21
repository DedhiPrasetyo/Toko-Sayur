<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   function tampil_register()
   {
       return view('pages.auth.register'); 
   }

   function submit_register(Request $request)
   {
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->save();
   
       return redirect()->route('login.tampil'); // Menggunakan route helper
   }

   function tampil_login()
   {
       return view('pages.auth.login'); 
   }

   function submit_login(Request $request)
   {
       $data = $request->only('email', 'password');
        
       if (Auth::attempt($data)) {
           $request->session()->regenerate();
           return redirect()->route('pages.dashboard.index'); // Redirect ke dashboard
       } else {
           return redirect()->back()->with('gagal', 'Email atau password salah');
       }
   }
}
