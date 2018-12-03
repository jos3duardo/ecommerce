@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h3 class="card-title">Lista de Pessoas</h3>
          @if (count($pessoas) > 0)
              <table class="table table-hover panel">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nome</th>
                          <th>Salario</th>
                          <th>Nascimento</th>
                          <th>Estado Civil</th>
                          <th>Ativo</th>
                          <th>Profissão</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($pessoas as $pessoa)
                          <tr>
                              <td>{{ $pessoa->id }}</td>
                              <td>{{ $pessoa->nome }}</td>
                              <td>R$ {{ $pessoa->salario }}</td>
                              <td>{{ date('d/m/Y', strtotime($pessoa->data_nascimento)) }}</td>
                              <td>{{ $pessoa->estado_civil }}</td>
                              <td>{{ ($pessoa->ativo)? "Ativo" : "Inativo" }}</td>
                              <td>{{ $pessoa->profissao->name }}</td>
                              <td>
                                  <a href="/pessoa/edit/{{ $pessoa->id }}" class="btn btn-sm btn-primary">Editar</a>
                                  <a href="/pessoa/delete/{{ $pessoa->id }}" class="btn btn-sm btn-danger">Apagar</a>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          @endif
      </div>
      <h5 class="card-title">Exibindo {{$pessoas->count()}} Pessoas do total de {{$pessoas->total()}} ({{$pessoas->firstItem()}} a {{$pessoas->lastItem()}})</h5>
            <div class="center">
                {{$pessoas->links()}}
            </div>
      <div class="card-footer">
          <a href="/pessoa/new" class="btn btn-sn btn-primary" role="button">Cadastrar Pessoa</a>
      </div>
  </div>
</div>


@endsection     