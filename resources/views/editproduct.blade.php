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
                    <input type="number"  step="any" class="form-control" name="valorProduto" id="valorProduto" value="{{$prod->valor}}">
                    <label for="categoriaProduto">Categoria</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        {{-- pega a categoria atual do produto --}}
                        <option value="{{$prod->categoria->id}}" >{{$prod->categoria->name}}</option>
                        @foreach ($cats as $cat)
                        {{-- mostra as outras categorias --}}
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