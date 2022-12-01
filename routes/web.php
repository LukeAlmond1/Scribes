<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Auth routes
// ------------------------------------------------------------------------------------------------
Route::get('auth/signup', [\App\Http\Controllers\AuthController::class, 'signup']);

// Protected routes
// ------------------------------------------------------------------------------------------------
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::
    middleware('auth')
    ->name('blogs')
    ->group(
        function () {
            // Blog routes
            // ------------------------------------------------------------------------------------
            Route::resource('blogs', BlogController::class);
        }
    );

require __DIR__.'/auth.php';