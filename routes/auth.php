<?php

use App\Http\Controllers\Auth\{NewPasswordController, OauthController, RegisterController, ResendVerificationController, SessionController, VerifyEmailController};
use App\Http\Controllers\Auth\CompleteController;
use App\Http\Controllers\Auth\OAuth\{CallbackController, RedirectController};
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
	Route::view('login', 'pages.auth.login')->name('login.view');
	Route::post('login', [SessionController::class])->name('login.attempt');
	Route::view('register', 'pages.auth.register')->name('register.view');
	Route::post('register', RegisterController::class)->name('register.store');
});

Route::prefix('oauth')->group(function() {
	Route::get('redirect', RedirectController::class)->name('oauth.redirect');
	Route::get('callback', CallbackController::class)->name('oauth.callback');
});

Route::middleware(['auth', 'unverified'])->group(function() {
	Route::view('verify', 'pages.auth.verify')->name('verification.notice');
	Route::post('resend', ResendVerificationController::class)->name('verification.resend');
	Route::get('verify/{id}/{hash}', VerifyEmailController::class)->name('verification.verify');
});

Route::middleware(['auth', 'verified', 'incomplete'])->group(function() {
	Route::view('complete', 'pages.auth.complete')->name('complete.view');
	Route::post('complete', CompleteController::class)->name('complete.store');
});

Route::prefix('password')->middleware('guest')->group(function() {

	Route::view('forgot', 'pages.auth.password.forgot')->name('password.forgot');
	Route::get('reset/{token}', function(string $token) {
		return view('pages.auth.password.new', compact('token'));
	})->name('password.reset');
	Route::post('new-password', NewPasswordController::class)->name('password.new');

});
