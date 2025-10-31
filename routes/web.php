<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\AtividadeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('destinos', DestinoController::class);

Route::resource('atividades', AtividadeController::class);
