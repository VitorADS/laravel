<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TarefasController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function list(){
        //$list = DB::select('SELECT * FROM tarefas');
        $data = [
            'list' => Tarefa::all(),
            'user' => Auth::user(),
            'showTask' => Gate::allows('see-task')
        ];

        return view('list', $data);
    }

    public function add(){
        return view('add');
    }

    public function addAction(Request $r){
        $r->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $r->input('titulo');

        /*DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', [
            'titulo' => $titulo
        ]);*/

        $t = new Tarefa;
        $t->titulo = $titulo;
        $t->save();

        return redirect()->route('tarefas.list');
    }

    public function edit($id){
        /*$data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);*/

        $data = Tarefa::find($id);

        if($data){
            return view('edit', [
                'data' => $data
            ]);
        }else{
            return redirect()->route('tarefas.list');
        }

        return view('edit');
    }

    public function editAction(Request $r, $id){
        $r->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $r->only(['titulo']);

        /*DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', [
            'id' => $id,
            'titulo' => $titulo['titulo']
        ]);*/

        /*$t = Tarefa::find($id);
        $t->titulo = $titulo['titulo'];
        $t->save();*/

        Tarefa::find($id)->update('titulo', $titulo['titulo']);

        return redirect()->route('tarefas.list');
    }

    public function del($id){
        /*DB::delete('DELETE FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);*/

        Tarefa::find($id)->delete();

        return redirect()->route('tarefas.list');
    }

    public function done($id){
        /*DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', [
            'id' => $id
        ]);*/

        $t = Tarefa::find($id);

        if($t){
            $t->resolvido = 1 - $t->resolvido;
            $t->save();
        }

        return redirect()->route('tarefas.list');
    }
}
