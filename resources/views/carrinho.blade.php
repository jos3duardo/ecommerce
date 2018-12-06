@extends('layouts.painel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Carrinho de compras</h2>
                <h3>Lista de produtos</h3>
                <table class="table table-bordered panel" id="tabelaclientes">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quant</th>
                            <th>Valor</th>
                            <th>Total</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @foreach ($carrinhos as  $car)
                        <tr>
                            <td>{{ $car->produtos['name']}}</td>
                            <!-- <td>{{$car->quantidade}}</td> -->
                            <td><input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" value="{{$car->quantidade}}"></td>
                            <td>R$ {{ $car->produtos['valor']}}</td>
                            <th>R$ {{ $car->produtos['valor'] * $car->quantidade }}</th>
                            <th>
                                <a  href="/carrinho/up/{{$car->id}}" class="btn btn-success btn-sm" type="submit">atualiza</a>
                                <a  href="/carrinho/{{$car->produtos['id']}}" class="btn btn-danger btn-sm" type="submit">apagar</a>
                            </th>
                            <?php $total +=($car->produtos['valor']*$car->quantidade) ?>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <a  href="/product" class="btn btn-warning" type="submit">Continuar comprando</a>
                <a  href="/carrinho/finaliza/{{$car->id}}" class="btn btn-success" type="submit">Finalizar Pedido</a>
                <!-- <a  href="/carrinho/limparCarrinho" class="btn btn-danger"> Limpar carrinho</a> -->
            </div>
            
            <div class="col-md-4">
                <h3>Total do Carrinho: R$ {{ $total}}</h3>
                
            </div>
        </div>
    
    </div>
@endsection
