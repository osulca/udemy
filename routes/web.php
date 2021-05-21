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
    return view('welcome');
});
Route::get("/ingresar-direccion", function (){
    if(Auth::check()){
        return view("guardarDireccion");
    }else{
        return redirect("/login");
    }
})->name("direccion");
Route::post("/guardar-direccion", [DireccionController::class, 'guardar']);

Route::get("/ingresar-compra", function (){
    if(Auth::check()){
        return view("guardarCompra");
    }else{
        return redirect("/login");
    }
})->name("compra");
Route::post("/guardar-compra", [CompraController::class, 'guardar'])->name("guardar-compra");

Route::get("/mostrar-compras", [CompraController::class, 'mostrarPorUsuario']);
Route::get("/mostrar-compras2", [CompraController::class, 'mostrarPorUsuario2'])->name("mostrar");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
