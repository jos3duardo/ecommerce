@extends('layouts.painel')

@section('content')
    <div class="container">
    <h2>Lista de Usuarios cadastrados no Sistema</h2>
        <table class="table table-bordered panel" id="tabelaclientes">
            <thead>
                <tr>
                    <th> id</th>
                    <th> Nome</th>
                    <th> Email </th>
                    <th> Rua</th>
                    <th> Numero</th>
                    <th> Bairro</th>
                    <th> Cidade</th>
                    <th> UF</th>
                    <th> CEP</th>
                    <th> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <th>{{ $u->email }}</th>
                    <th>{{ $u->endereco->rua }}</th>
                    <th>{{ $u->endereco->numero}}</th>
                    <th>{{ $u->endereco->bairro}}</th>
                    <th>{{ $u->endereco->cidade}}</th>
                    <th>{{ $u->endereco->uf}}</th>
                    <th>{{ $u->endereco->cep}}</th>
                    <td>
                        <a href="/editar/{{$u->id}}" class="btn btn-sm btn-info">Editar</a>
                        <a href="/deletar/{{$u->id}}" class="btn btn-sm btn-danger">Deletar</a>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
