<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;

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

Auth::routes();

//Route::resource('departamento', App\Http\Controllers\DepartamentoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('departamento', DepartamentoController::class);

Route::resource('carrera', App\Http\Controllers\CarreraController::class);

Route::resource('grupo', App\Http\Controllers\GrupoController::class);

Route::resource('usuario', App\Http\Controllers\UsuarioController::class);

