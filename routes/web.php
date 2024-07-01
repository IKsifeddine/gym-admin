<?php

use App\Http\Controllers\ProfileController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $clients = Client::all();
    return view('dashboard', compact('clients'));
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/abonnements', function () {
    $clients = Client::all();
    return view('abonnements', compact('clients'));
})->middleware(['auth', 'verified'])->name('abonnements');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
