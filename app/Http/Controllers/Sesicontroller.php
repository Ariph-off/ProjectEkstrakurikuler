<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sesicontroller extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'voly') {
                return redirect('admin/voly');
            }elseif (Auth::user()->role == 'Pramuka') {
                return redirect('admin/Pramuka');
            }elseif (Auth::user()->role == 'Drumb_Band') {
                return redirect('admin/Drumb_Band');
            }elseif (Auth::user()->role == 'basket') {
                return redirect('admin/basket');
            }elseif (Auth::user()->role == 'Hadra') {
                return redirect('admin/Hadra');
            }elseif (Auth::user()->role == 'Pmr') {
                return redirect('admin/Pmr');
            }elseif (Auth::user()->role == 'Panahan') {
                return redirect('admin/Panahan');
            }elseif (Auth::user()->role == 'Sepak_Bola') {
                return redirect('admin/Sepak_Bola');
            }elseif (Auth::user()->role == 'Tari') {
                return redirect('admin/Tari');
            }elseif (Auth::user()->role == 'Futsal') {
                return redirect('admin/Futsal');
            }elseif (Auth::user()->role == 'Band_Musik') {
                return redirect('admin/Band_Musik');
            }elseif (Auth::user()->role == 'Remas') {
                return redirect('admin/Remas');
            }elseif (Auth::user()->role == 'Silat') {
                return redirect('admin/Silat');
            }elseif (Auth::user()->role == 'Bulutangkis') {
                return redirect('admin/Bulutangkis');
            }



        } else {
            return redirect('')->withErrors('Username dan Password anda masukkan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
