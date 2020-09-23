@extends('layouts.admin')

@section('content-title', 'Funcionários')

@section('content')
    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">Novo funcionário</a>

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

    @if(!count($funcionarios))
        <div class="alert alert-info">
            Nenhum registro encontrado!
        </div>
    @endif

    @if(count($funcionarios))
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>                    
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>               
                    <th>Opções</th>

                </tr>
            </thead>
            <tbody>

                @foreach($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $loop->iteration }}</td>                                            
                        <td>{{ $funcionario->nome_funcionario }}</td>
                        <td>{{ $funcionario->cpf}}</td>                       
                        <td>{{ $funcionario->telefone }}</td>                      
                        <td>{{ $funcionario->email }}</td>
                        <td>{{ $funcionario->endereco }}</td>                       
                        <td>
                            <a href="{{ route('funcionarios.edit', $funcionario->cod_funcionario) }}">Editar</a>

                            <a href="{{ route('funcionarios.destroy-confirm', $funcionario->cod_funcionario) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

