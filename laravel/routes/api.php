<?php

use App\Http\Controllers\v1\ProductosController;
use App\Http\Controllers\v1\CategoriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/productos', [ProductosController::class, 'obtenerLista']);
Route::get('/productos/{id}', [ProductosController::class, 'obtenerItem']);
Route::post('/productos', [ProductosController::class, 'store']);
Route::put('/productos', [ProductosController::class, 'update']);
Route::patch('/productos', [ProductosController::class, 'patch']);
Route::delete('/productos/{id}', [ProductosController::class, 'delete']);

Route::get('/categorias', [CategoriasController::class, 'obtenerLista']);
Route::get('/categorias/{id}', [CategoriasController::class, 'obtenerItem']);
Route::post('/categorias', [CategoriasController::class, 'store']);
Route::put('/categorias', [CategoriasController::class, 'update']);
Route::patch('/categorias', [CategoriasController::class, 'patch']);
Route::delete('/categorias/{id}', [CategoriasController::class, 'delete']);

