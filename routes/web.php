<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Blog routes
// ------------------------------------------------------------------------------------------------
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index']);
Route::post('blogs/search/{query}', [\App\Http\Controllers\BlogController::class, 'search']);

// Auth routes
// ------------------------------------------------------------------------------------------------
Route::get('auth/signup', [\App\Http\Controllers\AuthController::class, 'signup']);

Route::get('/', function () {
    return view('welcome');
});

// Breeze auth routes
// ------------------------------------------------------------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';