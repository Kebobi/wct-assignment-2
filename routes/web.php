<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostEditController;
use App\Http\Controllers\PostPreviewController;

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::post('/post', [PostController::class, 'store']);
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::post('/post/preview/{post}', [PostPreviewController::class, 'index'])->name('preview');
Route::post('/post/edit/{post}', [PostEditController::class, 'index'])->name('edit');

Route::get('/', [HomeController::class, 'index'])->name('home');

