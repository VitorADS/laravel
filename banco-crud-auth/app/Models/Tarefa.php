<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model{

    //protected $table = 'tarefas'; muda nome da tabela
    //protected $primarykey = 'id'; define qual atributo eh a pk
    //protected $incrementing = false; deixa a pk sem o auto increment
    //protected $keyType = 'string'; muda o tipo da pk
    //public $timestamps = false; timestamps nao existe
    //const CREATED_AT = 'exemplo' muda o nome do created_at ou updated_at

    protected $fillable = [
        'titulo'
    ];

    use HasFactory;
}
