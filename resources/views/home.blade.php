@extends('layouts.painel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->name }}</td>
                                   
                                    <td>
                                        <a href="/editar/{{$c->id}}" class="btn btn-sm btn-info">Editar</a>
                                        <a href="/deletar/{{$c->id}}" class="btn btn-sm btn-danger">Deletar</a>
                                    </td>
                                </tr>   
                                @endforeach
                            </tbody>
            
                        </table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
