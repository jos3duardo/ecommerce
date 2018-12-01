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
                    <input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque">
                    <label for="valorProduto">Valor</label>
                    <input type="number" class="form-control" name="valorProduto" id="valorProduto" placeholder="Valor">
                    <label for="categoriaProduto">Categoria</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}" >{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sn">Cancelar</button>
            </form>
        </div>
    </div>
</div>      
@endsection