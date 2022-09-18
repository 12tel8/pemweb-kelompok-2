<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('home',[HomeController::class,'create'])->name('home');

Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register');

Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'authenticate'])->name('login');
