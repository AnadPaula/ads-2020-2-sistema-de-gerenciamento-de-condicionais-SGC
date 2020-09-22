@extends('layouts.admin')

@section('content-title', 'Atualização de cliente')

@section('content')
    <form action="/clientes/{{ $cliente->id_cliente }}" method="post">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="nome_cliente" value="{{ $cliente->id_cliente }}">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_cliente" value="{{ $cliente->nome_cliente }}">
        </div>
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control" id="" name="cpf" value="{{ $cliente->cpf }}">
        </div>
        
        <div class="form-group">
            <label for="">RG</label>
            <input type="text" class="form-control" id="" name="rg" value="{{ $cliente->RG }}">
        </div>
        <div class="form-group">
            <label for="">ENDEREÇO</label>
            <input type="text" class="form-control" id="" name="endereço" value="{{ $cliente->endereço }}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email" value="{{ $cliente->email }}">
        </div>
        <div class="form-group">
            <label for="">DATA NASCIMENTO</label>
            <input type="text" class="form-control" id="" name="data_nascimento" value="{{ $cliente->data_nascimento }}">
        </div>
        <div class="form-group">
            <label for="">TELEFONE</label>
            <input type="text" class="form-control" id="" name="telefone" value="{{ $cliente->telefone }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
        <a href="/clientes" class="btn btn-danger">Cancelar</a>
    </form>
@endsection