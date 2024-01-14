<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');


Route::get('/my-route', 'MyController@index');


});

// routes/web.php
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


/*Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');*/

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/show', 'ProfileController@show')->name('profile.show');
    Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
});


use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
});

use App\Http\Controllers\VideoController;

Route::middleware(['auth'])->group(function () {
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
    Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');
});

// Add these routes to handle comments
Route::middleware(['auth'])->group(function () {
    Route::get('/videos/{video}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/videos/{video}/comments/store', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/videos/{video}/comments', [CommentController::class, 'index'])->name('comments.index');
});

// Add these routes to handle likes
Route::middleware(['auth'])->group(function () {
    Route::get('/videos/{video}/likes/create', [LikeController::class, 'create'])->name('likes.create');
    Route::post('/videos/{video}/likes/store', [LikeController::class, 'store'])->name('likes.store');
    Route::get('/videos/{video}/likes', [LikeController::class, 'index'])->name('likes.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
