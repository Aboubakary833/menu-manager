<?php

use App\Http\Controllers\Settings\SetLocaleController;
use App\Livewire\{Home};
use Illuminate\Support\Facades\Route;

Route::post('/settings/set-locale', SetLocaleController::class)->name('settings.set-locale');
Route::middleware(['auth', 'verified', 'complete'])->group(function() {
	Route::get('home', Home::class)->name('home');
});

require __DIR__ . '/auth.php';
