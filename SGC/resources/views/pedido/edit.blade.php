@extends('layouts.admin')

@section('content-title', 'Atualização de pedido')

@section('content')
    <form action="/pedidos/{{ $pedido->id_pedido }}" method="post">
        @csrf
        @method('PUT') 
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="id_pedido" value="{{ $pedido->id_pedido }}">
        </div>
        <div class="form-group">
            <label for="">Data de Entrega</label>
            <input type="text" class="form-control" id="" name="data_entrega" value="{{ $pedido->data_entrega }}">
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" id="" name="quantidade" value="{{ $pedido->quantidade }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
        <a href="/pedidos" class="btn btn-danger">Cancelar</a>
    </form>
@endsection