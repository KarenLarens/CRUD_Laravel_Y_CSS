<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesorioController;
use App\Http\Controllers\CalzadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\RopaController;

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

Route::resource('accesorios',AccesorioController::class);
Route::resource('calzado',CalzadoController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('marcas',MarcaController::class);
Route::resource('ropa',RopaController::class);

