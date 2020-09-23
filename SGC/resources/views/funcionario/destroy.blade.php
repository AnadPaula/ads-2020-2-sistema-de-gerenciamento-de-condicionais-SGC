@extends('layouts.admin')

@section('content-title', 'Exclusão de Funcionário')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o funcionário listado abaixo?
        </small>
    </p>

    <form action="{{ route('funcionarios.destroy', $funcionario->cod_funcionario) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>ID:</b> {{ $funcionario->cod_funcionario }} <br>
            <b>Nome:</b> {{ $funcionario->nome_funcionario }} <br>
            <b>CPF:</b> {{ $funcionario->cpf }} <br>           
            <b>Telefone:</b> {{ $funcionario->telefone }} <br>            
            <b>E-mail:</b> {{ $funcionario->email }} <br>
            <b>Endereço:</b> {{ $funcionario->endereco}} <br>            
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection