<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Login\{ConfirmIdentityController,
    HandleLoginCallbackController,
    LogByEmailController,
    LogByProviderController};

Route::view("/", "pages.home")->name("home");

Route::middleware("guest")->group(function() {
	Route::view("login", "pages.auth.login.index")->name("login.index");
	Route::view("register", "pages.auth.register.index")->name("register.index");
    Route::view("validate", "pages.auth.login.confirm")->name("login.validate");

    Route::prefix("auth")->group(function() {

		Route::get("redirect", LogByProviderController::class)->name("auth.provider.redirect");
		Route::get("callback", HandleLoginCallbackController::class)->name("auth.provider.callback");

        Route::middleware("ip.check")->group(function () {
            Route::post("attempt", LogByEmailController::class)->name("login.attempt");
            Route::middleware("ip.hasAccess")->group(function() {
                Route::view("confirmation", "pages.auth.login.confirm")->name("login.confirm-view");
                Route::post("confirm", ConfirmIdentityController::class)->name("login.confirm");
            });
        });

	});

});

Route::middleware(["auth", "verified", "identified"])->group(function () {

    Route::get("complete-registration", function () {
        return "Complete registration";
    })->withoutMiddleware(["identified"])->name("complete-registration");

    Route::post("logout", LogoutController::class)->name("logout");

});
