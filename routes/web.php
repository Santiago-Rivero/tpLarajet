<?php

use Illuminate\Support\Facades\App;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('articulos', 'App\Http\Controllers\ArticuloController')->middleware('auth');

Route::resource('usuarios', 'App\Http\Controllers\UsuarioController')->middleware('auth');

Route::resource('emprendimientos', 'App\Http\Controllers\EmprendimientoController')->middleware('auth');

Route::resource('tipoempresas', 'App\Http\Controllers\TipoempresaController')->middleware('auth');

Route::resource('localidades', 'App\Http\Controllers\LocalidadController')->middleware('auth');
