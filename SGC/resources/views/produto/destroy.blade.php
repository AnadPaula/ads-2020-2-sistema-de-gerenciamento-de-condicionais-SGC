@extends('layouts.admin')

@section('content-title', 'Exclusão de produto')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o produto listado abaixo?
        </small>
    </p>

    <form action="{{ route('produtos.destroy', $produto->cod_produto) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>ID:</b> {{ $produto->cod_produto }} <br>
            <b>Nome:</b> {{ $produto->nome_produto }} <br>
            <b>Marca:</b> {{ $produto->marca }} <br>           
            <b>Valor:</b> {{ $produto->valor }} <br>
            <b>Cor:</b> {{ $produto->cor }} <br>
            <b>Quantidade:</b> {{ $produto->quantidade }} <br>
            <b>Tamanho:</b> {{ $produto->tamanho }} <br>            
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection