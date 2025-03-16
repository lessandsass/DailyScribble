<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');
