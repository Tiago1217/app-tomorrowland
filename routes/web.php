<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController; // Importa o controlador

Route::get('/', function () {
    return view('welcome'); // Página inicial
});

// Rotas do recurso Musica
Route::resource('musicas', MusicaController::class);
