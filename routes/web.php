<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController; // Phải có dòng này

Route::get('/', [HomeController::class, 'index']);

// ĐÂY LÀ DÒNG QUAN TRỌNG:
Route::get('/products', [ProductController::class, 'list']);
Route::get('/bang-cuu-chuong/{n}', [App\Http\Controllers\HomeController::class, 'multiplication']);