<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\CursoController::class, 'mostrar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// -- Profesor --
Route::get('/registro-profesor', [\App\Http\Controllers\ProfesorController::class, 'guardar']);
Route::get('/subir-foto', [\App\Http\Controllers\ProfesorController::class, 'foto'])->name("fotos");
Route::post('/subir-foto', [\App\Http\Controllers\ProfesorController::class, 'guardarFoto'])->name('subir');
Route::get('/ver-ventas', [\App\Http\Controllers\ProfesorController::class, 'ventas'])->name('ventas');
Route::get('/ver-compras', [\App\Http\Controllers\VentaController::class, 'ventasPorUsuario'])->name('compras');

Route::get('/subir-curso', [\App\Http\Controllers\CursoController::class, 'mostrarCurso'])->name("form-curso");
Route::post('/subir-curso', [\App\Http\Controllers\CursoController::class, 'guardarCurso'])->name('subir-curso');
