<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


use App\Http\Controllers\PresenceController;

Route::post('/presence', [PresenceController::class, 'store'])->middleware(['auth', 'verified'])->name('presence.store');

require __DIR__.'/auth.php';
