<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller{

    public function list(){
        return view('list');
    }

    public function add(){
        return view('add');
    }

    public function addAction(){

    }

    public function edit(){
        return view('edit');
    }

    public function editAction(){

    }

    public function del(){

    }

    public function done(){

    }
}
