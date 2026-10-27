<?php

use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.Index');
Route::get('/product',[\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');