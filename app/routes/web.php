<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\NinoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPerfilController;
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

//Rutas por defecto
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('ninos', NinoController::class);
Route::resource('anuncios', AnuncioController::class);
Route::resource('users', UserController::class);
Route::resource('perfil', UserPerfilController::class);