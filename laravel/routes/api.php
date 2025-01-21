<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('notas', NotaController::class);
Route::apiResource('asignaturas', AsignaturaController::class);
Route::apiResource('perfiles', PerfilController::class);
Route::apiResource('posts', PostController::class);
Route::get('testEjer1/{id}',[AlumnoController::class, 'testEjer1']);
