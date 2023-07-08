<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\UsuarioController;

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

Route::get('/userL',[UsuarioController::Class,'read']);
Route::post('/userC',[UsuarioController::Class,'create']);
Route::patch('/userU',[UsuarioController::Class,'update']);
Route::delete('/userS',[UsuarioController::Class,'delete']);


Route::get('/peticion',[ContactoController::Class,'read']);
Route::post('/creacion',[ContactoController::Class,'create']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
