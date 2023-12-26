<?php

use Illuminate\Support\Facades\Route;


Route::middleware("guest")->group(function() {
	Route::view("/", "pages.home")->name("home");
	Route::view("/login", "pages.auth.login")->name("login");
});
