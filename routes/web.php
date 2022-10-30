<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MakeArticleController;

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

// Authentication
Route::get('register',[RegisterController::class,'create'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register');
Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'authenticate'])->name('login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['roles:WRITER']], function() {
    Route::get('write-article',[MakeArticleController::class,'create'])->name('write-article');
});

Route::get('/', function() {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post) {
    return view('posts', [
        'posts' => $post
    ]);
});
