<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PageController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.post');
Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware('session.auth')->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->middleware('session.auth')->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->middleware('session.auth')->name('pengelolaan');
Route::post('/logout', [PageController::class, 'logout'])->middleware('session.auth')->name('logout');
