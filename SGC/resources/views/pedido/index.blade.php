@extends('layouts.admin')

@section('content-title', 'Pedidos')

@section('content')
    <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Novo pedido</a>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (session('statusUpdate'))
        <div class="alert alert-info">
            {!! session('statusUpdate') !!}
        </div>
    @endif

    @if(!count($pedidos))
        <div class="alert alert-info">
            Nenhum registro encontrado!
        </div>
    @endif

    @if(count($pedidos))
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Entrega</th>
                    <th>Quantidade</th> 
                    <th>Opções</th>                    
                </tr>
            </thead>
            <tbody>

                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $loop->iteration }}</td>                                         
                        <td>{{ $pedido->data_entrega}}</td>                       
                        <td>{{ $pedido->quantidade }}</td>
                        <td>
                            <a href="{{ route('pedidos.edit', $pedido->id_pedido) }}">Editar</a>

                            <a href="{{ route('pedidos.destroy-confirm', $pedido->id_pedido) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

