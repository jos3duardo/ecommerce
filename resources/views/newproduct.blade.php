@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
            <form action="/product" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome da Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    <label for="unidadeProduto">unidade</label>
                    <input type="text" class="form-control" name="unidadeProduto" id="unidadeProduto" placeholder="Unidade">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque">
                    <label for="estoqueProduto">Valor</label>
                    <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Valor">
                    <label for="categoriaProduto">Categoria</label>
                    <input type="text" class="form-control" name="categoriaProduto" id="categoriaProduto"  >
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            </form>
        </div>
    </div>
</div>      
@endsection