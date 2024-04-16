<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/penjualan', [PenjualanController::class, 'showPOS'])->name('penjualan.pos');


Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});



Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('profile');











