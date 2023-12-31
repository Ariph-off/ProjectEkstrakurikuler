<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
        // echo "<h1>". Auth::user()->name ."</h1>";
    }


    public function login_proses(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email'  =>  $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            // return redirect()->route('backend.home');
            return redirect("/backend-home");
        } else {
            return redirect()->route('login')->with('failed', 'Email atau password salah');
        }
    }

    public function backendHome()
    {
        return view("backend.home");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success' , 'kamu berhasil logout');
    }
}


