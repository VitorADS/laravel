<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller{

    public function index(){
        $lista = [
            ['nome' => 'farinha', 'qt' => 2],
            ['nome' => 'ovos', 'qt' => 4],
            ['nome' => 'fermento', 'qt' => 1],
            ['nome' => 'chocolate', 'qt' => 2]
        ];

        $data = [
            'name' => 'Vitor',
            'age' => 60,
            'lista' => $lista
        ];

        return view('config', $data);
    }
}
