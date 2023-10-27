<?php

use App\Livewire\Chat;
use Illuminate\Support\Facades\Route;

try {
    if(!app()->isProduction()) {
        auth()->loginUsingId(1);
    }
} catch (\Throwable $th) {
    //throw $th;
}

Route::get('/', Chat::class)->name('chat.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
