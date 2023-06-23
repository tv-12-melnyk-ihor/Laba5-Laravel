<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Models\NewModel;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [NewController::class, 'isworking']);

Route::get('/add/{num1}/{num2}', [NewController::class, 'add']);

Route::get('/subtract/{num1}/{num2}', [NewController::class, 'subtract']);

Route::get('/multiply', function () {
    return view('multiply');
});

Route::post('/multiply', [NewController::class, 'multiply'])->name('multiply');

Route::get('/divide', function () {
    return view('divide');
});

Route::post('/divide', [NewController::class, 'divide'])->name('divide');



Route::get('/products/create', [NewController::class, 'createproduct'])->name('products.create');

Route::post('/products', [NewController::class, 'store'])->name('products.store');
