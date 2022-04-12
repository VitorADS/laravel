<?php

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\TodoController;
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

Route::resource('todo', TodoController::class);
/*
GET - /todo - index - todo.index - LISTA OS ITENS
GET - /todo/create - create - todo.create - FORM DE CRIACAO
POST - /todo - store - todo.store - RECEBER OS DADOS E ADD ITEM
GET - /todo/{id} - show - todo.show - VISUALIZAR ITEM INDIVIDUAL
GET /todo/{id}/edit - edit - todo.edit - FORM DE EDICAO
PUT - /todo/{id} - update - todo.update - RECEBER OS DADOS E UPDATE ITEM
DELETE - /todo/{id} destroy - todo.destroy - DELETAR O ITEM
*/

Route::prefix('/tarefas')->group(function(){

    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list');

    Route::get('/add', [TarefasController::class, 'add'])->name('tarefas.add');
    Route::post('/add', [TarefasController::class, 'addAction']);

    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit');
    Route::post('edit/{id}', [TarefasController::class, 'editAction']);

    Route::get('delete/{id}', [TarefasController::class, 'del'])->name('tarefas.del');

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done');

});
