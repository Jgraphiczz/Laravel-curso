<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
//hay que traerse el controlador para poder usarlo
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);
