<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invoices extends Model{

    protected $fillable = [
        'description',
        'value',
        'address_id',
        'user_id'
    ];

    protected $hidden = [
        'address_id',
        'user_id'
    ];

    public function address(){
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    use HasFactory;
}
