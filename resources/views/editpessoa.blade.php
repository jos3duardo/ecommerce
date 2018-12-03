@extends('layouts.painel')
@section('content')
<div class="content">
    <div class="card border">
        <div class="card-body">
        <form action="/pessoa/{{$pessoa->id}}" method="POST">
                @csrf
                <div class="form-group">

<label for="nomePessoa">Nome</label>
                    <input type="text" class="form-control" name="nomePessoa" 
                        id="nomePessoa" value="{{$pessoa->nome}}">
                    <label for="salarioPessoa">salario</label>
                    <input type="text" class="form-control" name="salarioPessoa" 
                        id="salarioPessoa" value="{{$pessoa->salario}}">
                    <label for="DataNascimentoPessoa">Data Nascimento</label>
                    <input type="date" class="form-control" name="DataNascimentoPessoa" 
                        id="DataNascimentoPessoa" value="{{$pessoa->data_nascimento}}">
                    <label for="estadoCivilPessoa">Estado Civil</label>
                    <input type="text" class="form-control" name="estadoCivilPessoa" 
                        id="estadoCivilPessoa" value="{{$pessoa->estado_civil}}">
                    <label for="ativoPessoa">Ativo</label>
                    <select class="form-control" name="ativoPessoa" id="ativoPessoa">
                        <option value="{{$pessoa->ativo}}" >{{($pessoa->ativo)? "Ativo":"Inativo"}}</option>
                        @if ($pessoa->ativo == 1)
                            <option value="0" >Inativo</option>    
                        @else
                            <option value="1" >Ativo</option>    
                        @endif
                    </select>
                    <label for="profissaoPessoa">Profissão</label>
                    <select class="form-control" name="profissaoPessoa" id="profissaoPessoa">
                            <option value="{{$pessoa->profissao_id}}" >{{$pessoa->profissao->name}}</option>
                        @foreach ($professions as $profession)
                            <option value="{{$profession->id}}" >{{$profession->name}}</option>
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