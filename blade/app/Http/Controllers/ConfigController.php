<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller{

    public function index(){
        $data = [
            'name' => 'Vitor',
            'age' => 60
        ];

        return view('config', $data);
    }
}
