<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AsistenciaController;

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

// Rutas del módelo de estudiantes.
Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']);
Route::post('/estudiantes', [EstudianteController::class, 'store']);

// Rutas del módelo de sesiones.
Route::get('/sesiones', [SesionController::class, 'index']);
Route::get('/sesiones/{id}', [SesionController::class, 'show']);
Route::post('/sesiones', [SesionController::class, 'store']);

// Rutas del módelo de asistencias.
Route::get('/asistencias', [AsistenciaController::class, 'index']);
Route::get('/asistencias/{id}', [AsistenciaController::class, 'show']);
Route::post('/asistencias', [AsistenciaController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
