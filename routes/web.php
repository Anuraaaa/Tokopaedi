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

Route::get('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');
Route::post('/actionregister', [RegisterController::class, 'actionregister']) -> name('actionregister')->middleware('guest');

Route::get('/login', [LoginController::class, 'login']) -> name('login')->middleware('guest');
Route::post('/actionlogin', [LoginController::class, 'actionlogin']) -> name('actionlogin')->middleware('guest');
Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/loggedhome', [HomeController::class, 'loggedhome'])->name('loggedhome')->middleware('auth');