<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
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
        Route::get('/cart', [CartController::class, 'showMyCart'])->name('cart');
        Route::post('/cart/add/{keyboardId}', [CartController::class, 'addToCart']);
        Route::get('/transaction-history', [TransactionController::class, 'showTransactionHistoryPage'])->name('transactionHistoryPage');
    });
    
    Route::middleware('admin')->group(function(){
        Route::get('/addKeyboard', [KeyboardController::class, 'showAddKeyboardPage'])->name('addKeyboard');
        Route::post('/addKeyboard', [KeyboardController::class, 'addKeyboard']);
        Route::get('/manageCategories', [CategoryController::class, 'manageCategoriesPage'])->name('manageCategories');
        Route::get('/category/update/{categoryId}', [CategoryController::class, 'showUpdateCategoryPage'])->name('updateCategoryPage');
        Route::put('/category/updateCategory/{categoryId}', [CategoryController::class, 'updateCategory']);
        Route::post('/category/deleteCategory/{categoryId}', [CategoryController::class, 'deleteCategory']);
    });
    
});

// Route::get('/keyboardPage', function(){
//     return view('/KeyboardPage');
// })->name('keyboardPage');

// Route::get('/updateKeyboard', function(){
//     return view('/UpdateKeyboard');
// })->name('updateKeyboard');
