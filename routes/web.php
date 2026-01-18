<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('employees', function () {
    return view('empolyeelist');
})->name('employees');

Route::get('attendance', function () {
    return view('attendance');
})->name('attendance');