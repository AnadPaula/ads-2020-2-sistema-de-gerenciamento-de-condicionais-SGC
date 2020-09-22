
@section('content-title', 'Exclusão de cliente')

@section('content')
    <p class="display-4 text-danger">
        <small>
            Deseja realmente excluir o cliente listado abaixo?
        </small>
    </p>

    <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="post">
        @csrf
        @method('DELETE')

        <p>
            <b>Nome:</b> {{ $cliente->nome_cliente }} <br>
            <b>CPF:</b> {{ $cliente->cpf }} <br>
            <b>ID_CLIENTE:</b> {{ $cliente->id_cliente }} <br>
            <b>RG:</b> {{ $cliente->RG }} <br>
            <b>ENDEREÇO:</b> {{ $cliente->endereço }} <br>
            <b>E-mail:</b> {{ $cliente->email }}
            <b>DATA NASCIMENTO:</b> {{ $cliente->data_nascimento }} <br>
            <b>TELEFONE:</b> {{ $cliente->telefone }} <br>
        </p>

        <button class="btn btn-warning" type="submit">Sim</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-danger" >Cancelar</a>
    </form>
@endsection