<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');