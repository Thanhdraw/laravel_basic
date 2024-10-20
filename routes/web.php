<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\CateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage.home');
});
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
});
Route::get('/shop', [ProductController::class, 'index']);
Route::get('/shop/{id}', [ProductController::class, 'show']);

Route::get('/category', [CateController::class, 'index']);

Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');



Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

