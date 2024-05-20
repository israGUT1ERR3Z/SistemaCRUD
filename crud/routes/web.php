<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[CRUDController::class,"index"])->name("crud.index");

Route::get('/registro',[CRUDController::class,"registro"])->name("crud.registro");
Route::post('/registro',[CRUDController::class,"subirDatos"])->name("crud.subir");

Route::get('/modificar',[CRUDController::class,"modificar"])->name("crud.modifica");
Route::post('/modificar',[CRUDController::class,"actualizarDatos"])->name("crud.actualizar");

Route::get('/eliminar',[CRUDController::class,"eliminar"])->name("crud.elimina");
Route::post('/eliminar',[CRUDController::class,"eliminarDatos"])->name("crud.delete");