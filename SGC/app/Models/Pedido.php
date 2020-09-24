<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedido';

    protected $table = 'pedidos';

    protected $fillable = ['data_entrega', 'quantidade'];

    public $timestamps = false; 
}

