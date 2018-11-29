@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h5 class="card-title">Cadastro de Categorias</h5>
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
      </div>
      <div class="card-footer">
          <a href="/category/new" class="btn btn-sn btn-primary" role="button">Nova Categoria</a>
      </div>
  </div>
</div>


@endsection     