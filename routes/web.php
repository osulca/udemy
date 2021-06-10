<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\CompraController;
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

Route::get('/', function () {
    return view('bienvenido');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// -- Profesor --
Route::get('/registro-profesor', [\App\Http\Controllers\ProfesorController::class, 'guardar']);
Route::get('/ver-ventas', [\App\Http\Controllers\ProfesorController::class, 'ventas'])->name('ventas');
Route::get('/ver-compras', [\App\Http\Controllers\VentaController::class, 'ventasPorUsuario'])->name('compras');
