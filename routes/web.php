<?php

use App\Http\Controllers\_SiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Define routes
Route::get('/', [_SiteController::class, 'index'])->name('index');

// Route to dashboard view, requires authentication and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group of routes requiring authentication
Route::middleware('auth')->group(function () {
    // Profile editing route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // Profile updating route
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Profile deletion route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include additional authentication routes from 'auth.php'
require __DIR__ . '/auth.php';
