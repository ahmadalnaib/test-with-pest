<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterIndexController;

Route::get('/',HomeController::class);
Route::get('/register',RegisterIndexController::class);
