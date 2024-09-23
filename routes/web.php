<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


Route::post('/products', [ProductController::class, 'store']);


// Primero define las rutas específicas
Route::get('/test-login', [AuthController::class, 'testLogin']);
Route::get('/test-logout', [AuthController::class, 'testLogout']);
Route::get('/test-user', [AuthController::class, 'testUser']);




// Luego define la ruta que captura todas las demás rutas
Route::get('/{any}', function () {
    return view('main');
})->where('any', '.*');
