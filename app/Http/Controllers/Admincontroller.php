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
    function index(){
        return view('backend.home');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function admin(){
        $total_ekstra = DB::table('ekstra')->count();
        // dd($total_ekstra);
        return view('backend.home',compact(('total_ekstra')));
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
