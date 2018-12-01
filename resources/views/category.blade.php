@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h2>Lista de Categorias</h2>
      
          @if (count($cats) > 0)
              <table class="table table-hover table-dark">
                  <thead>
                      <tr>
                          <th>Código</th>
                          <th>Nome da Categoria</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($cats as $cat)
                          <tr>
                              <td>{{$cat->id}}</td>
                              <td>{{$cat->name}}</td>
                              <td>
                                  <a href="/category/edit/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                  <a href="/category/delete/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          @endif
          <h5 class="card-title">Exibindo {{$cats->count()}} Categorias do total de {{$cats->total()}} ({{$cats->firstItem()}} a {{$cats->lastItem()}})</h5>
            <div class="center">
                {{$cats->links()}}
            </div>
      </div>
      <div class="card-footer">
          <a href="/category/new" class="btn btn-sn btn-primary" role="button">Nova Categoria</a>
      </div>
  </div>
</div>


@endsection     