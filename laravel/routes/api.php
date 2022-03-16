<?php

use App\Http\Controllers\v1\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/productos', [ProductoController::class, 'obtenerLista']);
Route::get('/productos/{id}', [ProductoController::class, 'obtenerItem']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos', [ProductoController::class, 'update']);
Route::patch('/productos', [ProductoController::class, 'patch']);
Route::delete('/productos/{id}', [ProductoController::class, 'delete']);