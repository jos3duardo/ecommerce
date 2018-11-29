@extends('layouts.painel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-dark" id="tabelaclientes">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th> Email </th>
                                    <th> Rua</th>
                                    <th> Numero</th>
                                    <th> Bairro</th>
                                    <th> Cidade</th>
                                    <th> UF</th>
                                    <th> CEP</th>
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
            </div>
        </div>
    </div>
</div>
@endsection
