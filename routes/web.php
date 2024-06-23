<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Fora do middleware apenas para os usuários terem acesso ao sistema.
Route::get('/validity', [StockController::class, 'validity'])->name('validity');
Route::get('/index', [StockController::class, 'index'])->name('index');
Route::get('/stocks/create', [StockController::class, 'create'])->name('create');
Route::get('/stocks/{id}', [StockController::class, 'show']);
Route::post('/stocks', [StockController::class, 'store'])->name('stocks');
Route::delete('/stocks/{id}', [StockController::class, 'destroy']);
Route::get('/stocks/edit/{id}', [StockController::class, 'edit']);
Route::put('/stocks/update/{id}', [StockController::class, 'update']);

Route::get('/', [StockController::class, 'dashboard'])->name('welcome');

require __DIR__ . '/auth.php';
