<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductCostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product-costs', [ProductCostController::class, 'index'])->name('product-costs');


