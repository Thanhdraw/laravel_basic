<?php

use App\Http\Controllers\CateController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage.home');
});

Route::get('/shop', function () {
    return view('product.product');
});
// Route::get('/category', function () {
//     return view('categories.cate');
// });
Route::get('/category', [CateController::class, 'index']);



Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
