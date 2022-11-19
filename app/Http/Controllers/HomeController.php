<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        if (Auth::check()) {
            return view('loggedhome');
        }
        else {
            return view('home');
        }
    }
    public function loggedhome() {
        if (Auth::check()) {
            return view('loggedhome');
        }
        else {
            return view('home');
        }
    }
}
