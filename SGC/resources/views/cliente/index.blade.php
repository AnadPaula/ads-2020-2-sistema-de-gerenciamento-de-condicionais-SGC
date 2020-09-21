@extends('layouts.admin')

@section('content-title', 'Clientes cadastrados')

@section('content')
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Novo cliente</a>

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

    @if(!count($clientes))
        <div class="alert alert-info">
            Nenhum registro encontrado!
        </div>
    @endif

    @if(count($clientes))
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Id_cliente</th>
                    <th>RG</th>
                    <th>Endereço</th>
                    <th>Data Nascimento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Opções</th>

                </tr>
            </thead>
            <tbody>

                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $loop->iteration }}</td>                        
                        <td>{{ $cliente->nome_cliente }}</td>
                        <td>{{ $cliente->cpf}}</td>
                        <td>{{ $cliente->id_cliente }}</td>
                        <td>{{ $cliente->rg }}</td>
                        <td>{{ $cliente->endereço }}</td>
                        <td>{{ $cliente->data_nascimento }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                            <a href="{{ route('clientes.destroy-confirm', $cliente->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

