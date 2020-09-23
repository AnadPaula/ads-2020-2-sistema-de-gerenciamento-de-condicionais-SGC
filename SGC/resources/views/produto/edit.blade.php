@extends('layouts.admin')

@section('content-title', 'Atualização de produto')

@section('content')
    <form action="/produtos/{{ $produto->cod_produto }}" method="post">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="nome_produto" value="{{ $produto->cod_produto }}">
        </div>
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" name="nome_produto" value="{{ $produto->nome_produto }}">
        </div>
        <div class="form-group">
            <label for="">Marca</label>
            <input type="text" class="form-control" id="" name="marca" value="{{ $produto->marca }}">
        </div>
        
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" class="form-control" id="" name="valor" value="{{ $produto->valor }}">
        </div>
        <div class="form-group">
            <label for="">Cor</label>
            <input type="text" class="form-control" id="" name="cor" value="{{ $produto->cor }}">
        </div>       
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" id="" name="quantidade" value="{{ $produto->quantidade }}">
        </div>
        <div class="form-group">
            <label for="">Tamanho</label>
            <input type="text" class="form-control" id="" name="tamanho" value="{{ $produto->tamanho }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar alterações</button>
        <a href="/produtos" class="btn btn-danger">Cancelar</a>
    </form>
@endsection