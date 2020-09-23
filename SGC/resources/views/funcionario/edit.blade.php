@extends('layouts.admin')

@section('content-title', 'Atualização de funcionário')

@section('content')
    <form action="/funcionarios/{{ $funcionario->cod_funcionario}}" method="post">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="nome_funcionario" value="{{ $funcionario->cod_funcionario }}">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_funcionario" value="{{ $funcionario->nome_funcionario }}">
        </div>
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control" id="" name="cpf" value="{{ $funcionario->cpf }}">
        </div>
        
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" id="" name="telefone" value="{{ $funcionario->telefone }}">
        </div>        
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email" value="{{ $funcionario->email }}">
        </div>
        <div class="form-group">
            <label for="">Emdereço</label>
            <input type="text" class="form-control" id="" name="endereco" value="{{ $funcionario->endereco}}">
        </div>       

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
        <a href="/funcionarios" class="btn btn-danger">Cancelar</a>
    </form>
@endsection