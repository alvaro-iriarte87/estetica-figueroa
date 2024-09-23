<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::post('/products', [ProductController::class, 'store']);

// use App\Http\Controllers\AuthController;
// // Ruta para iniciar sesión
// Route::post('/login', [AuthController::class, 'login']);

// // Ruta para cerrar sesión
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// // Ruta para obtener el usuario autenticado
// Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');


