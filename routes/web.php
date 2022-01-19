<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
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

//ALL USER
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'showHome'])->name('home');
Route::get('/keyboard/details/{keyboardId}', [KeyboardController::class, 'getKeyboardDetails'])->name('keyboardDetail');
Route::get('/category/{categoryId}', [CategoryController::class, 'showKeyboardCategory'])->name('category');

//GUEST ONLY
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function(){
    //LOGGED IN ONLY
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::middleware('customer')->group(function(){
    });
    
    Route::middleware('admin')->group(function(){
        Route::get('/addKeyboard', [KeyboardController::class, 'showAddKeyboardPage'])->name('addKeyboard');
        Route::post('/addKeyboard', [KeyboardController::class, 'addKeyboard']);
    });
    
});

// Route::get('/keyboardPage', function(){
//     return view('/KeyboardPage');
// })->name('keyboardPage');

// Route::get('/updateKeyboard', function(){
//     return view('/UpdateKeyboard');
// })->name('updateKeyboard');
