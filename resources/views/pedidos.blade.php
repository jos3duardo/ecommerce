@extends('layouts.painel')

@section('content')
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <h1 class="text-center">Resumo dos pedidos no Sistema</h1>
            </div>
        </div>
        <hr>
        <div class="card border">
            <div class="card-body">
                <h2>Criar um novo pedido</h2>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/userCarrinho" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <label for="nomePessoa">Nome do Cliente</label>
                                        <select class="form-control" name="nomePessoa" id="nomePessoa" required>
                                            <option value="" >Selecione um Cliente</option>
                                            @foreach ($pessoas as $pessoa)
                                                <option value="{{$pessoa->id}}" >{{$pessoa->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sn btn-m10">Criar pedido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Lista de pedidos no sistema</h3>
                        <table class="table table-bordered panel" id="tabelaclientes">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Vendedor</th>
                                    <th>Cliente</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($carrinhos as  $car)
                                <tr>
                                    <td>{{ $car->id}}</td>
                                    <td>{{ $car->usuario['name']}}</td>
                                    <td> <a href="/pessoa/edit/{{ $car->pessoa->id }}">{{ $car->pessoa['nome']}}</a></td>
                                    <td>{{ ($car->status)? $car->status:"em processamento"}}</td>
                                    <th>
                                        <a  href="/pedidos/edit/{{$car->id}}" class="btn btn-primary btn-sm" type="submit">editar</a>
                                        <a  href="/carrinho/{{$car->id}}" class="btn btn-success btn-sm" type="submit">ver</a>
                                        <a  href="/pedidos" class="btn btn-danger btn-sm" type="submit">apagar</a>
                                    </th>
                                    
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>Exibindo {{$carrinhos->count()}} Produtos do total de {{$carrinhos->total()}} ({{$carrinhos->firstItem()}} a {{$carrinhos->lastItem()}})</h5>
                    <div class="center">
                        {{$carrinhos->links()}}
                    </div>
                </div>
            </div>
        </div>

@endsection
