<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cliente';

    protected $table = 'clientes';

    protected $fillable = ['id_cliente','nome_cliente', 'cpf', 'RG', 'endereço', 'email', 'data_nascimento', 'telefone'];

    public $timestamps = false;    


}


