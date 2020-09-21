<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

   
    protected $table = 'clientes';

    protected $fillable = ['nome_cliente', 'cpf', 'id_cliente', 'RG', 'endereço', 'email', 'data_nascimento', 'telefone'];

    public $timestamps = false;


}


