@extends('layouts.admin')

@section('content-title', 'Novo pedido')

@section('content')
    <form action="{{ route('pedidos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" name="id_pedido">
        </div>
        <div class="form-group">
            <label for="">Data de Entrega</label>
            <input type="text" class="form-control" id="" name="data_entrega">
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="text" class="form-control" id="" name="quantidade">
        </div>
@endsection