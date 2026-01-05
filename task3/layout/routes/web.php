<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('admin/table', function () {
    return view('admin.table');
})->name('admin.table');

Route::get('admin/form', function () {
    return view('admin.form');
})->name('admin.form');

Route::get('admin/chart', function () {
    return view('admin.chart');
})->name('admin.chart');
