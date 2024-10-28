<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', ProductController::class);
Route::resource('/services', ServiceController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/tags', TagController::class);
Route::resource('/reviews', ReviewController::class);
