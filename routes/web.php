<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/admin', [ProductController::class, 'admin']);
Route::post('/admin/produto', [ProductController::class, 'store']); 