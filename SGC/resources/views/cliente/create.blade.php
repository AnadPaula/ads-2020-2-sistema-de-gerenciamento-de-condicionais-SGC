@extends('layouts.admin')

@section('content-title', 'Novo cliente')

@section('content')
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="id_cliente">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_cliente">
        </div>
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control" id="" name="cpf">
        </div>
       
        <div class="form-group">
            <label for="">RG</label>
            <input type="text" class="form-control" id="" name="RG">
        </div>
        <div class="form-group">
            <label for="">ENDEREÇO</label>
            <input type="text" class="form-control" id="" name="endereço">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email">
        </div>
        <div class="form-group">
            <label for="">DATA NASCIMENTO</label>
            <input type="text" class="form-control" id="" name="data_nascimento">
        </div>
        <div class="form-group">
            <label for="">TELEFONE</label>
            <input type="text" class="form-control" id="" name="telefone">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection