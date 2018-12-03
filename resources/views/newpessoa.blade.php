@extends('layouts.painel')
@section('content')
<div class="content">
        <h3>Cadastrar Pessoa</h3>
    <div class="card border">
        <div class="card-body">
            <form action="/pessoa" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomePessoa">Nome</label>
                    <input type="text" class="form-control" name="nomePessoa" id="nomePessoa" placeholder="Pessoa">
                    <label for="salarioPessoa">salario</label>
                    <input type="text" class="form-control" name="salarioPessoa" id="salarioPessoa" placeholder="salario">
                    <label for="DataNascimentoPessoa">Data Nascimento</label>
                    <input type="date" class="form-control" name="DataNascimentoPessoa" id="DataNascimentoPessoa" placeholder="DataNascimento">
                    <label for="estadoCivilPessoa">Estado Civil</label>
                    <input type="text" class="form-control" name="estadoCivilPessoa" id="estadoCivilPessoa" placeholder="estadoCivil">
                    <label for="ativoPessoa">Ativo</label>
                    <select class="form-control" name="ativoPessoa" id="ativoPessoa">
                        <option value="0" >Selecione uma Opção</option>
                        <option value="0" >Inativo</option>
                        <option value="1" >Ativo</option>
                    </select>
                    <label for="profissaoPessoa">Profissão</label>
                    <select class="form-control" name="profissaoPessoa" id="profissaoPessoa">
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