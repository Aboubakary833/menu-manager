<?php

use App\Http\Controllers\Auth\HandleCallbackController;
use App\Http\Controllers\Auth\Register\CompleteController;
use App\Http\Controllers\Auth\Login\{ConfirmIdentityController, LogByEmailController, LogByProviderController};
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\Register\RegisterByEmailController;
use App\Http\Controllers\Auth\Register\ReSendVerificationController;
use App\Http\Controllers\Settings\SetLocaleController;
use Illuminate\Support\Facades\Route;

Route::post("/settings/set-locale", SetLocaleController::class)->name("settings.set-locale");
Route::middleware("guest")->group(function() {
	Route::view("login", "pages.auth.login.index")->name("login.index");
	Route::view("register", "pages.auth.register.index")->name("register.index");
    Route::view("validate", "pages.auth.login.confirm")->name("login.validate");

    Route::prefix("auth")->group(function() {

		Route::get("redirect", LogByProviderController::class)->name("auth.provider.redirect");
		Route::get("callback", HandleCallbackController::class)->name("auth.provider.callback");

        Route::post("attempt", LogByEmailController::class)->name("login.attempt");
        Route::post("register", RegisterByEmailController::class)->name("register");
        Route::middleware("can.confirm")->group(function() {
            Route::view("confirmation", "pages.auth.login.confirm")->name("login.confirm-view");
            Route::post("confirm", ConfirmIdentityController::class)->name("login.confirm");
        });

        Route::middleware(["auth", "unverified"])->group(function() {
            Route::view("verify", "pages.auth.register.verify")->name("verification.notice");
            Route::post("resend-verification", ReSendVerificationController::class)->name("verification.resend");
        });

        Route::middleware(["auth", "can.complete"])->group(function() {
           Route::view("complete", "pages.auth.register.complete")->name("complete.view");
           Route::post("complete-submit", CompleteController::class)->name("complete.submit");
        });
	});

});

Route::middleware(["isVerified", "completed"])->group(function () {

    Route::view("/", "pages.home")->name("home");
    Route::post("logout", LogoutController::class)->name("logout");

});
