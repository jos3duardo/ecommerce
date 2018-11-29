@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
        <form action="/category/{{$cat->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria" value="{{$cat->nome}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sn">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection     