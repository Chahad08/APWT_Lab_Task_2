<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use Illuminate\Auth\Events\Login;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[pageController::class, 'Login'])->name('login');
Route::post('/login',[pageController::class, 'cheakUser'])->name('login');
Route::get('/register',[pageController::class, 'register'])->name('register');
Route::post('/register',[pageController::class, 'createAccount'])->name('register');
Route::get('/home',[pageController::class, 'home'])->name('home');