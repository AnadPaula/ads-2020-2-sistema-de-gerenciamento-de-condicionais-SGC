@extends('layouts.admin')

@section('content-title', 'Clientes cadastrados')

@section('content')

    <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm">Novo cliente</a>

    @if (session('status'))
        <div class="alert alert-success mt-2">
            {!! session('status') !!}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>              
                <th>Nome</th>
                <th>CPF</th>
                <th>ID_Cliente</th>
                <th>RG</th>
                <th>Endereço</th>
                <th>E-mail</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cliente->nome_cliente }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->id_cliente }}</td>
                    <td>{{ $cliente->RG }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->data_nascimento }}</td>
                    <td>{{ $cliente->telefone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
