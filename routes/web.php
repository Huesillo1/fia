<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EscuderiaController;
use App\Http\Controllers\PilotoController;
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

Route::get('inicio', function(){
    return view('inicio');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('escuderia', EscuderiaController::class)->middleware('auth');

Route::resource('piloto', PilotoController::class)->middleware('auth');

Route::resource('carrera', CarreraController::class)->middleware('auth');

Route::post('carrera/{carrera}/agrega-piloto', [CarreraController::class, 'agregaPiloto'])->name('carrera.agrega-piloto');

