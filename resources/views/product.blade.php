@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h3 class="card-title">Lista de Produtos</h3>
          @if (count($prods) > 0)
              <table class="table table-hover table-dark">
                  <thead>
                      <tr>
                          <th>Código</th>
                          <th>Nome</th>
                          <th>Unidade</th>
                          <th>Estoque</th>
                          <th>Valor</th>
                          <th>Categoria</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($prods as $prod)
                          <tr>
                              <td>{{ $prod->id }}</td>
                              <td>{{ $prod->name }}</td>
                              <td>{{ $prod->unidade }}</td>
                              <td>{{ $prod->estoque }}</td>
                              <td>{{ $prod->valor }}</td>
                              <td>{{ $prod->categoria->name }}</td>
                              <td>
                                <a href="/product/edit/{{ $prod->id }}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/product/delete/{{ $prod->id }}" class="btn btn-sm btn-danger">Apagar</a>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          @endif
      </div>
      <h5 class="card-title">Exibindo {{$prods->count()}} Produtos do total de {{$prods->total()}} ({{$prods->firstItem()}} a {{$prods->lastItem()}})</h5>
            <div class="center">
                {{$prods->links()}}
            </div>
      <div class="card-footer">
          <a href="/product/new" class="btn btn-sn btn-primary" role="button">Novo Produto</a>
      </div>
  </div>
</div>


@endsection     