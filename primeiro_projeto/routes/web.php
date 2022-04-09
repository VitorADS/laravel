<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/exercise', [SiteController::class, 'exercicio2']);
Route::get('/home', [SiteController::class, 'home']);