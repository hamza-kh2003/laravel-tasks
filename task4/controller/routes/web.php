<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

/*
Why is prefix() used?

prefix() is used to add a common URL segment to a group of routes.
It helps organize related routes (such as admin routes) under one URL structure, reduces repetition, and makes the routes easier to maintain.
If the prefix needs to be changed, it can be updated in one place instead of modifying every route.

Why is using name() recommended instead of hardcoded URLs?

Using name() is recommended because it allows routes to be referenced by their names instead of fixed URLs.
This makes the application more flexible and easier to maintain, since changing the URL does not require updating all links.
Named routes also improve code readability and reduce the risk of broken links.

*/

Route::prefix('admin')->group(function () {
Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/reports', [AdminController::class,'reports'])->name('admin.reports');
});

Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::get('/contact/result', [ContactController::class,'result'])->name('contact.result');


Route::resource('feedback',FeedbackController::class);