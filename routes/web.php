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
Route::get('/keyboard/{categoryId}', [CategoryController::class, 'showKeyboardCategory'])->name('category');
Route::get('/keyboard', [CategoryController::class, 'showKeyboard'])->name('showCategorySearched');

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
    Route::get('/changePassword', [RegisterController::class, 'showChangePasswordPage']);
    Route::post('/changePassword', [RegisterController::class, 'changePassword']);
    
    Route::middleware('customer')->group(function(){
        Route::get('/cart', [CartController::class, 'showMyCart'])->name('cart');
        Route::post('/cart/add/{keyboardId}', [CartController::class, 'addToCart'])->name('addToCart');
        Route::post('/cart/update/{keyboardId}', [CartController::class, 'updateQuantityItem'])->name('updateQuantityItem');
        Route::get('/transaction-history', [TransactionController::class, 'showTransactionHistoryPage'])->name('transactionHistoryPage');
    });
    
    Route::middleware('admin')->group(function(){
        Route::get('/addKeyboard', [KeyboardController::class, 'showAddKeyboardPage'])->name('showKeyboard');
        Route::post('/keyboard/add', [CategoryController::class, 'addKeyboard']);
        Route::get('/keyboard/update/{keyboardId}', [KeyboardController::class, 'updateKeyboard']);
        Route::post('/keyboard/update/{keyboardId}', [KeyboardController::class, 'deleteKeyboard']);
        Route::get('/manageCategories', [CategoryController::class, 'manageCategoriesPage'])->name('manageCategories');
        Route::get('/category/update/{categoryId}', [CategoryController::class, 'showUpdateCategoryPage'])->name('updateCategoryPage');
        Route::put('/category/updateCategory/{categoryId}', [CategoryController::class, 'updateCategory']);
        Route::post('/category/deleteCategory/{categoryId}', [CategoryController::class, 'deleteCategory']);
    });
    
});
