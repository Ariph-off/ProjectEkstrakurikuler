<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class Admincontroller extends Controller
{
    function coba(){
        return view('back-ekstra.index');
    }
    function admin(){
        $data = [
            'total_ekstra'=>DB::table('ekstra')->count(),
            'total_pembina'=>DB::table('pembina')->count(),
            'total_pelatih'=>DB::table('pelatih')->count(),
            'total_kategori'=>DB::table('kategori')->count(),
            'total_siswa'=>DB::table('siswa')->count(),
        ];
        return view('backend.home',$data);

        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }

    function voly(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Pramuka(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Drumb_Band(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function basket(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Hadra(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Pmr(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Panahan(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Sepak_Bola(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Tari(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Futsal(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Band_Musik(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Remas(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Silat(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Bulutangkis(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
}
