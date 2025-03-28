<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');


// Test Routes
Route::view('/example-page', 'example-page');
Route::view('/example-auth', 'example-auth');

// End Test Routes


Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware([])->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/login', 'loginForm')->name('login');
            Route::get('/forgot-password', 'forgotForm')->name('forgot');
        });
    });

    Route::middleware([])->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'adminDashboard')->name('dashboard');
        });
    });

});


