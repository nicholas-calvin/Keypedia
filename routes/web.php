<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('/home');
})->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/keyboardPage', function(){
    return view('/KeyboardPage');
})->name('keyboardPage');

Route::get('/updateKeyboard', function(){
    return view('/UpdateKeyboard');
})->name('updateKeyboard');

Route::get('/keyboardDetail', function(){
    return view('/keyboardDetail');
})->name('keyboardDetail');