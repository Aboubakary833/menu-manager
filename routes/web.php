<?php

use App\Http\Controllers\Settings\SetLocaleController;
use Illuminate\Support\Facades\Route;

Route::post('/settings/set-locale', SetLocaleController::class)->name('settings.set-locale');
Route::middleware(['auth', 'verified', 'complete'])->group(function() {
	Route::view('home', 'pages.board.home')->name('home');
});

require __DIR__ . '/auth.php';
