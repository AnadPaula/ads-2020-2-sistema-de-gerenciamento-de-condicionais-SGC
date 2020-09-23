@extends('layouts.admin')

@section('content-title', 'Produtos')

@section('content')
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo produto</a>

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

    @if(!count($produtos))
        <div class="alert alert-info">
            Nenhum registro encontrado!
        </div>
    @endif

    @if(count($produtos))
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>                    
                    <th>Valor</th>
                    <th>Cor</th>
                    <th>Quantidade</th>
                    <th>Tamanho</th>                    
                    <th>Opções</th>

                </tr>
            </thead>
            <tbody>

                @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $loop->iteration }}</td>                                            
                        <td>{{ $produto->nome_produto }}</td>
                        <td>{{ $produto->marca}}</td>                       
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->cor }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->tamanho}}</td>                        
                        <td>
                            <a href="{{ route('produtos.edit', $produto->cod_produto) }}">Editar</a>

                            <a href="{{ route('produtos.destroy-confirm', $produto->cod_produto) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

