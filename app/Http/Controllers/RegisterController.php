<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function actionregister(Request $request)
    {
        //check validasi form
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password-repeat' => 'required|same:password'
        ]);

        //create to db
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('register')->with('success', 'Registration success, please login!');    
    }
}
