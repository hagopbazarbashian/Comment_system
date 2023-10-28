<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

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
})->name('welcome');

// For Regiter
Route::post('regiter' , [RegisterController::class , 'regiter_submit'])->name('regiter_submit');
// For Login
Route::post('login' , [LoginController::class , 'login_submit'])->name('login_submit');

// User_Home_page
Route::middleware(['register:register'])->group(function () {
    Route::get('home' , [HomeController::class , 'index'])->name('user_dashboard');
    Route::post('comment' , [CommentController::class , 'store'])->name('comment');
});
