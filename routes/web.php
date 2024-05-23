<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('products', [ProductController::class, 'index']);
// ^^^^here we are calling the index function in our product controller