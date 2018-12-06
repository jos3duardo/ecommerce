@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h3>Lista de Compras Realizadas</h3>
          @if (count($compras) > 0)
              <table class="table table-hover panel">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Valor da compra</th>
                          <th>Data da compra</th>
                          <th>Pagamento</th>
                          <th>Pessoa</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($compras as $compra)
                          <tr>
                              <td>{{ $compra->id }}</td>
                              <td>R$ {{ $compra->valor_total }}</td>
                              <td>{{ $compra->data }}</td>
                              <td>{{ ($compra->pagamento_realizado)? "Realizado": "Pendente" }}</td>
                              <td>{{ $compra->pessoa->nome }}</td>

                              <td>
                                  <a href="/category/edit/{{$compra->id}}" class="btn btn-sm btn-primary">Editar</a>
                                  <a href="/category/delete/{{$compra->id}}" class="btn btn-sm btn-danger">Apagar</a>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          @endif
          <h5 class="card-title">Exibindo {{$compras->count()}} Categorias do total de {{$compras->total()}} ({{$compras->firstItem()}} a {{$compras->lastItem()}})</h5>
            <div class="center">
                {{$compras->links()}}
            </div>
      </div>
  </div>
</div>
@endsection     