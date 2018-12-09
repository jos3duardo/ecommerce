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
                        @foreach ($carrinhos as $key => $car)
                        <tr>
                            <td>{{ $car->produtos['name']}}</td>
                            <td>
                                <div >
                                    <div class="input-group number-spinner">
                                        <span class="input-group-btn data-dwn">
                                            <a  href="#" onclick="decrementaValor(0);return false;" class="btn btn-default btn-danger" data-dir="dwn">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </a>
                                        </span>
                                        <input  id="resultado" type="text" class="form-control text-center" value="1" min="-10" max="40">
                                        <span class="input-group-btn data-up">
                                            <a href="#" onclick="incrementaValor(10);return false;"class="btn btn-default btn-info" data-dir="up">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>R$ {{number_format($car->produtos['valor'], 2 ,',','.')}}</td>
                            <th>R$ {{ number_format($car->produtos['valor'] * $car->quantidade, 2 ,',','.') }}</th>
                            <th>
                                {{-- <a  href="/carrinho/up/{{$car->id}}" class="btn btn-success btn-sm" type="submit">atualiza</a> --}}
                                <a  href="/carrinho/{{$car->produtos['id']}}" class="btn btn-danger btn-sm" type="submit">apagar</a>
                            </th>
                            <?php  $total += $car->produtos['valor']*$car->quantidade ?>
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
                <h3>Total do Carrinho: R$ {{ number_format( $total, 2 ,',','.')}}</h3>
                
            </div>
        </div>
    </div>

   
    <script>
        function incrementaValor(valorMaximo){
            var value = parseInt(document.getElementById('resultado').value,10);
            value = isNaN(value) ? 0 : value;
            if(value >= valorMaximo) {
                value = valorMaximo;
            }else{
                value++;
            }
            document.getElementById('resultado').value = value;
        }
 
        function decrementaValor(valorMinimo){
            var value = parseInt(document.getElementById('resultado').value,10);
            value = isNaN(value) ? 0 : value;
            if(value <= valorMinimo) {
                value = 0;
            }else{
                value--;
            }
            document.getElementById('resultado').value = value;
        }
    </script>
@endsection
