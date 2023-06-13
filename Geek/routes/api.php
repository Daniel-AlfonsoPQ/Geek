<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("comidas", [miControlador::class, 'index']);
Route::post("crearComida", [miControlador::class, 'store']);
Route::get("mostrarComida/{id}", [miControlador::class, 'show']);
Route::put("actualizarComida/{id}", [miControlador::class, 'update']);
Route::delete("borrarComida/{id}", [miControlador::class, 'destroy']);