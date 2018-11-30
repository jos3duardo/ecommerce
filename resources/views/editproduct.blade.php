@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
        <form action="/product/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="nomeProduto">Nome da Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" value="{{$prod->name}}">
                    <label for="unidadeProduto">unidade</label>
                    <input type="text" class="form-control" name="unidadeProduto" id="unidadeProduto" value="{{$prod->unidade}}">
                    <label for="estoqueProduto">Estoque</label>
                    <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" value="{{$prod->estoque}}">
                    <label for="valorProduto">Valor</label>
                    <input type="text" class="form-control" name="valorProduto" id="valorProduto" value="{{$prod->valor}}">
                    <label for="categoriaProduto">Categoria</label>
                    <input type="text" class="form-control" name="categoriaProduto" id="categoriaProduto" value="{{$prod->categoria->name}}"    >
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sn">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection     