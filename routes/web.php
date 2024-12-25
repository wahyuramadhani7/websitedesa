<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/infografis', function () {
    return view('infografis');
})->name('infografis');
Route::get('/pelayanan', function () {
    return view('pelayanan');
})->name('pelayanan');
Route::get('/dana', function () {
    return view('dana');
})->name('dana');
Route::get('/UMKMdesa', function () {
    return view('UMKMdesa');
})->name('UMKMdesa');





