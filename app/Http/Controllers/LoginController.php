<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('loggedhome');
        }
        else {
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        //check validasi form
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        //autentikasi email dan password
        if (Auth::Attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('loggedhome')->with('success', 'Kamu berhasil login.'); //redirect ke route loggedhome dengan session message suuccess
        }
        else {
            return redirect()->route('login')->with('error', "Kamu gagal login, email atau password salah!"); //redirect ke route login dengan session message error
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', "Kamu berhasil logout.");
    }
}
