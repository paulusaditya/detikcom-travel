<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
})->name('master');


Route::get('/registration', function () {
    return view('registration');
})->name('registration');
