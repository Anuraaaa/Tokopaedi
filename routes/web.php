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
Route::post('/actionregister', [RegisterController::class, 'actionregister']) -> name('actionregister');

Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin']) -> name('actionlogin');
Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/loggedhome', [HomeController::class, 'loggedhome'])->name('loggedhome');