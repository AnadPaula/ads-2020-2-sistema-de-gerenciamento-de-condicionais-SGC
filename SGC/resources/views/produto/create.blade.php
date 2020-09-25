@extends('layouts.admin')

@section('content-title', 'Novo produto')

@section('content')
    <form action="{{ route('produtos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="cod_produto">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_produto">
        </div>
        <div class="form-group">
            <label for="">Marca</label>
            <input type="text" class="form-control" id="" name="marca">
        </div>
       
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" class="form-control" id="" name="valor">
        </div>
        <div class="form-group">
            <label for="">Cor</label>
            <input type="text" class="form-control" id="" name="cor">
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" id="" name="quantidade">
        </div>
        <div class="form-group">
            <label for="">Tamanho</label>
            <input type="text" class="form-control" id="" name="tamanho">
        </div>        

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection