<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompleteRegisterController;


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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Add new login route
//Route::get('/login', [App\Http\Controllers\OAuthController::class, 'index'])->name('login');

//Add new complete register route
Route::get('/complete-register', [App\Http\Controllers\CompleteRegisterController::class, 'index'])->name('complete-register');

//Add new complete register route
Route::post('/complete-register', [App\Http\Controllers\CompleteRegisterController::class, 'update'])->name('complete-register');
