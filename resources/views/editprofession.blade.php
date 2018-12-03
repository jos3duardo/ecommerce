@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
        <form action="/professions/{{$prof->id}}" method="POST">
                @csrf
                <div class="form-group">
                        <div class="col-md-6">
                                <label for="nomeProfissao">Nome da Profissão</label>
                                <input type="text" class="form-control" name="nomeProfissao" 
                                    id="nomeProfissao" value="{{$prof->name}}">
                            </div>
                            <div class="col-md-3">
                                <label for="salarioProfissao">Media Salarial da Profissão</label>
                                <input type="number" step="any" class="form-control" name="salarioProfissao" 
                                    id="salarioProfissao"value="{{$prof->media_salaria}}">
                            </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sn btn-m15">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sn btn-m15">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection     