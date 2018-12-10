@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
            <h2>Dados do Pedido</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3  name="nomePessoa">Cliente: {{$carrinho->pessoa->nome}}</h3>
                </div>
                <div class="col-md-4">
                    <h3>Número do pedido: {{$carrinho->id}}</h3>
                </div>
                <div class="col-md-4">
                    <h3>Data do pedido: {{$carrinho->created_at->format('d/m/Y')}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card border">
        <div class="card-body">
            <h4 class="card-title">Adcionar Produtos</h4>
                <div class="row">
                    <div class="col-md-8">
                        <label for="nomeProduto">Nome do Produto</label>
                        <select class="form-control" name="nomeProduto" id="nomeProduto" required>
                            <option value="" >Selecione um Produto</option>
                            @foreach ($produtos as $produto)
                                <option value="{{$produto->id}}" >{{$produto->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="quantidadeProduto">Quant</label>
                        <input type="number" class="form-control" name="quantidadeProduto" id="quantidadeProduto" required>
                    </div>
                <a href="/carrinho/comprar/{{$carrinho->pessoa->id}}/{{ $produto->id }}" class="btn btn-warning btn-m15">Add ao carrinho</a>
            </div>
        </div>
    </div>      
    <div class="row">
            <div class="col-md-12">
                <h3>Lista de produtos no carrinho</h3>
                <table class="table table-bordered panel" id="tabelaclientes">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>qunatidade</th>
                            <th>Valor</th>
                            <th>Total</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        {{-- @foreach ($carrinhos as  $car)
                        <tr>
                            <td>{{ $car->id}}</td>
                            <td>{{ $car->usuario['name']}}</td>
                            <td> <a href="/Produto/edit/{{ $car->Produto->id }}">{{ $car->Produto['nome']}}</a></td>
                            <td>{{ ($car->status)? $car->status:"em processamento"}}</td>
                            <th>
                                <a  href="/carrinho/edit/{{$car->id}}" class="btn btn-primary btn-sm" type="submit">editar</a>
                                <a  href="/carrinho/{{$car->id}}" class="btn btn-success btn-sm" type="submit">ver</a>
                                <a  href="/#/{{$car->produtos['id']}}" class="btn btn-danger btn-sm" type="submit">apagar</a>
                            </th>
                            
                        </tr> 
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

</div>
@endsection     