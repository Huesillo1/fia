<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EscuderiaController;
use App\Http\Controllers\PilotoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

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

Route::resource('escuderia', EscuderiaController::class)->middleware('verified');

Route::resource('piloto', PilotoController::class)->middleware('verified');

Route::resource('carrera', CarreraController::class)->middleware('verified');

Route::resource('archivo', ArchivoController::class)->except(['edit','update','show'])->middleware('verified');

Route::get('archivo/descarga/{archivo}',[ArchivoController::class, 'descargar'])->name('archivo.descargar');

Route::post('carrera/{carrera}/agrega-piloto', [CarreraController::class, 'agregaPiloto'])->name('carrera.agrega-piloto');

