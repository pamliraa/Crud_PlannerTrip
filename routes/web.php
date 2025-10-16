<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('destinos', DestinoController::class);
