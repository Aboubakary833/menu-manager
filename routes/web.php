<?php

use App\Http\Controllers\Settings\SetLocaleController;
use Illuminate\Support\Facades\Route;

Route::post("/settings/set-locale", SetLocaleController::class)->name("settings.set-locale");
Route::middleware("guest")->group(function() {
	Route::view("login", "pages.auth.login")->name("login.view");
	Route::view("register", "pages.auth.register")->name("register.view");
});
