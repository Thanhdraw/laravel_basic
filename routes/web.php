<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryCotroller;
use App\Http\Controllers\Admin\ProductCotroller;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\CateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\admin\Category;
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



Route::get('/admin/categories', action: [CategoryCotroller::class, 'index'])->name('admin.categories.index');
Route::get('/admin/products', action: [ProductCotroller::class, 'index'])->name('admin.products.index');
Route::get('/admin/users', action: [UserController::class, 'index'])->name('admin.user');




Route::prefix('admin')->group(function () {



    #admin 
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.post');

    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');



    #category - admin - CRUD
    Route::get('/categories/create', [CategoryCotroller::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryCotroller::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryCotroller::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryCotroller::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryCotroller::class, 'destroy'])->name('categories.destroy');


    // products - admin - CRUD
    Route::get('/products/create', [ProductCotroller::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductCotroller::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [ProductCotroller::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', action: [ProductCotroller::class, 'update'])->name('products.update');
    Route::get('/products/{id}/delete', [ProductCotroller::class, 'delete'])->name('products.destroy');

});
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('role:admin');