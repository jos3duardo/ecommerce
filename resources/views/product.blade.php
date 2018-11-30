@extends('layouts.painel')
@section('content')
<div class="content">
  <div class="card border">
      <div class="card-body">
          <h4 class="card-title">Cadastro de Produtos</h4>
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

      <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="582CD7162121A728841F7FB6C4B96739" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-laranja-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

      <div class="card-footer">
          <a href="/product/new" class="btn btn-sn btn-primary" role="button">Novo Produto</a>
      </div>
  </div>
</div>


@endsection     