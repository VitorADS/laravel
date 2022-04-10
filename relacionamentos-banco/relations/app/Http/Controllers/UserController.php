<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(Request $r){
        $users = User::all();

        return $users;
    }

    public function findOne(Request $r){
        $user = User::find($r->id);

        $user['address'] = $user->address;

        return $user;
    }

    public function add(Request $r){
        $rawData = $r->only(['name', 'email', 'password', 'address_id']);

        $user = User::create($rawData);

        return $user;
    }
}
