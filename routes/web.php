<?php

use App\Http\Controllers\Web\PilotosController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'web.inicio')->name('inicio');
Route::get('/pilotos', [PilotosController::class, 'index'])
    ->name('pilotos');

// Rutas del Rally
Route::view('/rutas', 'web.rutas.index')->name('rutas');

// Historia del Rally
Route::view('/historia', 'web.historia.index')->name('historia');
