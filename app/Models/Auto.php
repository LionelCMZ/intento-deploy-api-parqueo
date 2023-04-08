<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    public function clientes(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
}
