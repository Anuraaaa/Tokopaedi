<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('actionregister', [RegisterController::class, 'actionregister']) -> name('actionregister');

Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::get('actionlogin', [LoginController::class, 'actionlogin']) -> name('actionlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Route::get('/login', function() {
//     return view('login');
// });

// Route::get('home', function(){
//     return view('home');
// });