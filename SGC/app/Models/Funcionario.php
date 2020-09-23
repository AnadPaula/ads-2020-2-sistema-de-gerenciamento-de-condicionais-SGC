<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_funcionario';

    protected $table = 'funcionarios';

    protected $fillable = ['cod_funcionario','nome_funcionario', 'cpf', 'telefone', 'email', 'endereco'];

    public $timestamps = false;  
}
