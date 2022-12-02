<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AccountController;

// Protected routes
// ------------------------------------------------------------------------------------------------
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Blog routes
// ------------------------------------------------------------------------------------
Route::
    middleware('auth')
    ->name('blogs')
    ->group(
        function () {
            Route::resource('blogs', BlogController::class);
        }
    );

// Account routes
// ------------------------------------------------------------------------------------
Route::middleware('auth')
    ->name('accounts')
    ->group(
        function () {
            Route::resource('account', AccountController::class);
        }
    );

require __DIR__.'/auth.php';