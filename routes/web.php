<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbonementController;


Route::get('/',[ClientController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/clients/search', [ClientController::class, 'search'])->name('clients.search');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::delete('/clients/{clients}',[ClientController::class,'destroy'])->name('clients.destroy');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');


// routes/web.php
Route::get('abonements/create', [AbonementController::class, 'create'])->name('abonements.create');
Route::post('abonements', [AbonementController::class, 'store'])->name('abonements.store');





Route::get('/abonnements', function () {
    $clients = Client::all();
    return view('abonnements', compact('clients'));
})->middleware(['auth', 'verified'])->name('abonnements');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
