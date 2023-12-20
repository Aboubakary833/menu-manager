<?php

use Illuminate\Support\Facades\Route;


Route::view("/", "pages.home")->middleware("guest");
