<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

// Esta rota será acessada após o usuário ter feito login.
Route::get('/home', [StockController::class, 'index'])->middleware('auth')->name('home');

// Esta rota é para a dashboard após o usuário estar autenticado e verificado.
Route::get('/painel-de-produtos', [StockController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Aqui estão as outras rotas que você tinha definido, como rotas para o perfil, stocks, contato, etc. Certifique-se de que elas estão na ordem correta.

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [StockController::class, 'index'])->middleware('auth');
Route::get('/stocks/create', [StockController::class, 'create'])->middleware('auth');
Route::get('/stocks/{id}', [StockController::class, 'show'])->middleware('auth');
Route::post('/stocks', [StockController::class, 'store'])->middleware('auth');
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->middleware('auth');
Route::get('/stocks/edit/{id}', [StockController::class, 'edit'])->middleware('auth');
Route::put('/stocks/update/{id}', [StockController::class, 'update'])->middleware('auth');



require __DIR__.'/auth.php';
