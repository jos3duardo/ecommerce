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
                    <h3>Data: {{$carrinho->created_at->format('d/m/Y')}}</h3>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card border">
        <div class="card-body">
            <h4 class="card-title">Adcionar Produtos ao Pedido</h4>
            <div class="row">
                <form action="/carrinho/add/{{$carrinho->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-8">
                            <select class="form-control" name="nomeProduto" id="nomeProduto" required>
                                <option value="" >Selecione um Produto</option>
                                @foreach ($produtos as $produto)
                                    <option value="{{$produto->id}}">{{$produto->name}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" name="quantidadeProduto" id="quantidadeProduto" placeholder="Quantidade">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning ">Adcionar</button>
                </form>
            </div>      
        </div>
 
        <div class="row">
                <div class="col-md-12">
                    <h3>Lista de produtos no carrinho</h3>
                        <?php $total = 0; $totalpedido = 0;?>
                    <table class="table table-bordered panel" id="tabelaclientes">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>quantidade</th>
                                <th>Valor</th>
                                <th>Total</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodCar as $car)
                            <tr>
                                <td>{{ $car->id}}</td>
                                <td>{{ $car->produtos['name']}}</td>
                                <td>{{ $car->quantidade}}</td>
                                <td>R$ {{  number_format( $car->produtos['valor'], 2 ,',','.')}}</td>
                                <td>R$ <?php $total = $car->quantidade * $car->produtos['valor']; $totalpedido += $total; echo number_format($total, 2 ,',','.')?></td>
                                <th>
                                    <a  href="/carrinho/delete/{{$carrinho->id}}/{{$car->id}}" class="btn btn-danger btn-sm" type="submit">apagar</a>
                                </th>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                <div class="card-footer">
                    <h3>Total do pedido: R$  <?php echo  number_format( $totalpedido, 2 ,',','.') ?></h3>
                    <a href="/finaliza/carrinho/{{$prodCar['id']}}" class="btn btn-success">Finalizar Pedido</a>
                </div>
            </div>
        </div>     
    </div>   
</div>
@endsection     