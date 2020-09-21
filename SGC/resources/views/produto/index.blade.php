@extends('layouts.admin')

@section('content-title', 'Produtos Cadastrados')

@section('content')
    <h2>Listagem Produtos</h2>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>                   
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Maria</td>
                <td>cidinha_ribeiro@gmail.com</td>
            </tr>
        </tbody>
    </table>
@endsection