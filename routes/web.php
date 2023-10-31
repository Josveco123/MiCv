<?php

use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ReferenciaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/referencia', [ReferenciaController::class, 'index'])->name('referencias.index');
Route::get('/estudios', [EstudiosController::class, 'index'])->name('estudios.index');
Route::get('/experiencia', [ExperienciaController::class, 'index'])->name('experiencia.index');
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos.index');

