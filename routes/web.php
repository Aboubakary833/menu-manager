<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Login\{HandleLoginCallbackController, LogByEmailController, LogByProviderController};


Route::middleware("guest")->group(function() {
	Route::view("/", "pages.home")->name("home");
	Route::view("login", "pages.auth.login.index")->name("login.index");
	Route::view("register", "pages.auth.register.index")->name("register.index");
	Route::prefix("auth")->group(function() {
		Route::get("redirect", LogByProviderController::class)->name("auth.provider.redirect");
		Route::get("callback", HandleLoginCallbackController::class)->name("auth.provider.callback");
        Route::post("attempt", LogByEmailController::class)->name("login.attempt");
	});
});

Route::middleware("auth")->group(function () {
    Route::get("complete-registration", function () {
        return "Complete registration";
    })->name("complete-registration");
    Route::middleware(["verified", "identified"])->group(function () {
        Route::get("dashboard", function() {
            return "Board";
        })->name("dashboard");
    });
});

