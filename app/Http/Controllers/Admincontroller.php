<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    function index(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function admin(){
        return view('backend.home');
    }
    function voly(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Pramuka(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Drumb_Band(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function basket(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
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
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Sepak_Bola(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Tari(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Futsal(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Band_Musik(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Remas(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Silat(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
    function Bulutangkis(){
        echo "login succes";
        echo "<h1>". Auth::user()->name."</h1>";
        echo "<a href='/logout'>logout>></a>";
    }
}
