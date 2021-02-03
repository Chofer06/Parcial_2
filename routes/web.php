<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\EditorialController;

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
//Pantalla Principal
Route::get('/', [AdministracionController::class,'Index']);

//Libros
Route::get('libros', [LibrosController::class,'Libros'])->name('listado');
Route::get('libros/registrar', [LibrosController::class,'RegistroForm'])->name('form_registro');
Route::post('libros/registrar', [LibrosController::class,'Registro'])->name('registrar');
Route::get('libros/actualizar', [LibrosController::class,'ActualizarForm']);
Route::post('libros/actualizar', [LibrosController::class,'Actualzar']);

//Editorial
Route::get('editorial', [EditorialController::class,'Editorial']);
