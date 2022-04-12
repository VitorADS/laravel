<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller{

    public function list(){
        $list = DB::select('SELECT * FROM tarefas');

        return view('list', [
            'list' => $list
        ]);
    }

    public function add(){
        return view('add');
    }

    public function addAction(Request $r){
        if($r->filled('titulo')){
            $titulo = $r->input('titulo');

            DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', [
                'titulo' => $titulo
            ]);

            return redirect()->route('tarefas.list');
        }else{
            return redirect()
                ->route('tarefas.add')
                ->with('warning', 'Voce nao preencheu o titulo');
        }
    }

    public function edit($id){
        $data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);

        if(count($data) > 0){
            return view('edit', [
                'data' => $data[0]
            ]);
        }else{
            return redirect()->route('tarefas.list');
        }

        return view('edit');
    }

    public function editAction(Request $r, $id){
        if($r->filled('titulo')){
            $titulo = $r->only(['titulo']);

            DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', [
                'id' => $id,
                'titulo' => $titulo['titulo']
            ]);

            return redirect()->route('tarefas.list');
        }else{
            return redirect()
                ->route('tarefas.edit', ['id' => $id])
                ->with('warning', 'Voce nao preencheu o titulo');
        }
    }

    public function del($id){
        DB::delete('DELETE FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('tarefas.list');
    }

    public function done($id){
        DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('tarefas.list');
    }
}
