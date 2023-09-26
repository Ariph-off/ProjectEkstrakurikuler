<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    function coba(){
        return view('back-ekstra.index');
    }
    function index(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function admin(){
        return view('backend.home');
    }
    function voly(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Pramuka(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Drumb_Band(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function basket(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Hadra(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Pmr(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Panahan(){
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Sepak_Bola(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Tari(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Futsal(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Band_Musik(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Remas(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Silat(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
    function Bulutangkis(){
        return view('back-ekstra.index');
        // echo "login succes";
        // echo "<h1>". Auth::user()->name."</h1>";
        // echo "<a href='/logout'>logout>></a>";
    }
}
