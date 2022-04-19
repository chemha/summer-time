<?php

use App\Http\Controllers\NinoController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Crear y guardar niños
Route::get('/ninos/create', [NinoController::class, 'create'])->name('ninos.create');
Route::post('/ninos', [NinoController::class, 'store'])->name('ninos.store');

//Index de niños
Route::get('/ninos', [NinoController::class, 'index'])->name('ninos.index');

//Mostrar niño especifico
Route::get('/nino/{nino}', [NinoController::class, 'show'])->name('ninos.show');

//Editar niño
Route::get('/ninos/{nino}/edit', [NinoController::class, 'edit'])->name('ninos.edit');
Route::put('/ninos/{nino}', [NinoController::class, 'update'])->name('ninos.update');

//Borrar niño
Route::delete('/ninos/{nino}', [NinoController::class, 'destroy'])->name('ninos.destroy');