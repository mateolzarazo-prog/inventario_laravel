<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('index');
});

Route::resource('products', ProductController::class)->except(['show']);
