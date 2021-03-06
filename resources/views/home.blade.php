@extends('layouts.painel')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2></div>
                    <h3>Lista dos usuarios cadastrados no sistema</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered panel" id="tabelaclientes">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Função</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->name }}</td>
                                <th>{{ $u->email }}</th>
                                <th>{{ $u->role }}</th>
                                <td>
                                    <a href="/editar/{{$u->id}}" class="btn btn-sm btn-info">Editar</a>
                                    <a href="/deletar/{{$u->id}}" class="btn btn-sm btn-danger">Deletar</a>
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/imagens/avatar.png" alt="Card image cap">
            <div class="card-body">
                <a href="/users/new" class="btn btn-primary">Add Usuario</a>
            </div>
        </div>
    </div>
@endsection
