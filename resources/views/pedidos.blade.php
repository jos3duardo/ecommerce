@extends('layouts.painel')

@section('content')
    <div class="container">
        <h1>Resumo de pedidos</h1>
        <hr>
        <h3>Criar um novo pedido</h3>
        <div class="row">
            <div class="col-md-12">
            <form action="/userCarrinho" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-8">
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
            </form>
        </div>
        <hr>
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
                                <a  href="/carrinho/edit/{{$car->id}}" class="btn btn-primary btn-sm" type="submit">editar</a>
                                <a  href="/carrinho/{{$car->id}}" class="btn btn-success btn-sm" type="submit">ver</a>
                                <a  href="/#/{{$car->produtos['id']}}" class="btn btn-danger btn-sm" type="submit">apagar</a>
                            </th>
                            
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
