<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\ChecklistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('destinos', DestinoController::class);
    Route::resource('orcamentos', OrcamentoController::class);
    Route::resource('diarios', DiarioController::class);
    Route::resource('checklists', ChecklistController::class);
    Route::resource('atividades', AtividadeController::class);
});

require __DIR__.'/auth.php';
