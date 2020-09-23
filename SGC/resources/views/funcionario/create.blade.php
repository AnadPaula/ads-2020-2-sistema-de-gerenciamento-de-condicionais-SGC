@extends('layouts.admin')

@section('content-title', 'Novo cliente')

@section('content')
    <form action="{{ route('funcionarios.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="cod_funcionario">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_funcionario">
        </div>
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" class="form-control" id="" name="cpf">
        </div>
       
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" id="" name="telefone">
        </div>        
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email">
        </div>
        <div class="form-group">
            <label for="">Endereço</label>
            <input type="text" class="form-control" id="" name="endereco">
        </div>       

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection