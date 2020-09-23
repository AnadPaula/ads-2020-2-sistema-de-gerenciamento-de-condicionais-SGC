@extends('layouts.admin')

@section('content-title', 'Exclusão de Pedidos')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o pedido listado abaixo?
        </small>
    </p>

    <form action="{{ route('pedidos.destroy', $pedido->id_pedido) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>ID:</b> {{ $pedido->id_pedido }} <br>
            <b>Data de Entrega:</b> {{ $pedido->data_entrega }} <br>
            <b>Quantidade:</b> {{ $pedido->quantidade }} <br>                       
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection