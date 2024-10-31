<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\CateController;
use App\Http\Controllers\PostController;
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

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');


// Route::get('/register', [RegisterController::class, 'register'])->name('register');

// Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Route::post('/register', [RegisterController::class, 'register']); 

// Route::get('/user-info', [RegisterController::class, 'showUserInfo'])->name('auth.user_info');

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


## action for users
Route::get('/users', [RegisterController::class, 'listUsers'])->name('users.list');
Route::get('/users/edit/{id}', [RegisterController::class, 'editUser'])->name('users.edit');
Route::put('/users/update/{id}', [RegisterController::class, 'updateUser'])->name('users.update');
Route::delete('/users/delete/{id}', [RegisterController::class, 'deleteUser'])->name('users.delete');


#admin 
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('admin/user', function () {
    return view('admin.user');
});

Route::get('admin/user', [RegisterController::class, 'adminListUsers'])->name('admin.user');

// Route::get('admin/user/edit/{id}', [RegisterController::class, 'editUser'])->name('users.edit');
// Route::put('admin/user/update/{id}', [RegisterController::class, 'updateUser'])->name('users.update');
// Route::delete('admin/user/delete/{id}', [RegisterController::class, 'deleteUser'])->name('users.delete');
Route::get('/create-post', [PostController::class, 'createPost']);



## action for contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

