<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        if (Auth::check()) {

            $products = DB::table('products')->get();
            return view('loggedhome', ['products' => $products]);
        }
        else {
            $products = DB::table('products')->get();
            return view('home', ['products' => $products]);
        }
    }
    public function loggedhome() {
        if (Auth::check()) {
            $products = DB::table('products')->get();
            return view('loggedhome', ['products' => $products]);
        }
        else {
            $products = DB::table('products')->get();
            return view('home', ['products' => $products]);
        }
    }
}
