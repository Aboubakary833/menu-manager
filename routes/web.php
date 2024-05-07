<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\Register\ReSendVerificationController;
use App\Http\Controllers\Settings\SetLocaleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\Login\{ConfirmIdentityController,
    HandleLoginCallbackController,
    LogByEmailController,
    LogByProviderController};

Route::post("/settings/set-locale", SetLocaleController::class)->name("settings.set-locale");
Route::middleware("guest")->group(function() {
	Route::view("login", "pages.auth.login.index")->name("login.index");
	Route::view("register", "pages.auth.register.index")->name("register.index");
    Route::view("validate", "pages.auth.login.confirm")->name("login.validate");

    Route::prefix("auth")->group(function() {

		Route::get("redirect", LogByProviderController::class)->name("auth.provider.redirect");
		Route::get("callback", HandleLoginCallbackController::class)->name("auth.provider.callback");

        Route::post("attempt", LogByEmailController::class)->name("login.attempt");
        Route::middleware("can.confirm")->group(function() {
            Route::view("confirmation", "pages.auth.login.confirm")->name("login.confirm-view");
            Route::post("confirm", ConfirmIdentityController::class)->name("login.confirm");
        });

        Route::middleware(["auth", "unverified"])->group(function() {
            Route::view("verify", "pages.auth.register.verify")->name("verification.notice");
            Route::post("resend-verification", ReSendVerificationController::class)->name("verification.resend");
        });
	});

});

Route::middleware(["isVerified", "completed"])->group(function () {

    Route::view("/", "pages.home")->name("home");
    Route::post("logout", LogoutController::class)->name("logout");

});
