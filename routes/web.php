<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('partidos','App\Http\Controllers\PartidoController');

Route::resource('jugadores','App\Http\Controllers\JugadorController');

Route::resource('sedes','App\Http\Controllers\SedeController');

Route::resource('posiciones','App\Http\Controllers\PaisController');

Route::resource('estadisticas','App\Http\Controllers\EstadisticaController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sedesA','App\Http\Controllers\AdminController',);
Route::resource('posicionesA','App\Http\Controllers\AdminPaisController',);
Route::resource('jugadoresA','App\Http\Controllers\AdminJugadorController',);
Route::resource('partidosA','App\Http\Controllers\AdminPartidoController',);


