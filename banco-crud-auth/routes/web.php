<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/tarefas')->group(function(){

    Route::get('/', [TarefasController::class, 'list']);

    Route::get('/add', [TarefasController::class, 'add']);
    Route::post('/add', [TarefasController::class, 'addAction']);

    Route::get('edit/{id}', [TarefasController::class, 'edit']);
    Route::post('edit/{id}', [TarefasController::class, 'editAction']);

    Route::get('delete/{id}', [TarefasController::class, 'del']);

    Route::get('marcar/{id}', [TarefasController::class, 'done']);

});
