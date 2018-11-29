@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
            <form action="/category" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">
                    
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            </form>
        </div>
    </div>
</div>      
@endsection