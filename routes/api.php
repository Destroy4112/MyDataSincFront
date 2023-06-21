<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/{id}', [ProductosController::class, 'show']);
Route::post('/productos-create', [ProductosController::class, 'store']);
Route::put('/productos-update/{id}', [ProductosController::class, 'update']);
Route::delete('/productos-delete/{id}', [ProductosController::class, 'destroy']);
