<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users', [UserController::class, 'add']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
Route::post('/addresses', [AddressController::class, 'add']);

Route::get('/invoices', [InvoicesController::class, 'index']);
Route::get('/invoices/{id}', [InvoicesController::class, 'findOne']);
Route::post('/invoices', [InvoicesController::class, 'add']);