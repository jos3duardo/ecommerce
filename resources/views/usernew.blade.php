@extends('layouts.painel')
@section('content')
    <div class="content">
        <h3>Cadastrar Usuario</h3>
        <form action="/user" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="nomePessoa">Nome</label>
                        <input type="text" class="form-control" name="nomePessoa" id="nomePessoa" placeholder="Nome" required>
                    </div>
                    <div class="col-md-4">
                        <label for="salarioPessoa">Salario</label>
                        <input type="number" step="any" class="form-control" name="salarioPessoa" id="salarioPessoa" placeholder="Salario"required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="DataNascimentoPessoa">Data Nascimento</label>
                        <input type="date" class="form-control" name="DataNascimentoPessoa" id="DataNascimentoPessoa" placeholder="Data Nascimento" required>
                    </div>  
                    <div class="col-md-3">
                        <label for="estadoCivilPessoa">Estado Civil</label>
                        <input type="text" class="form-control" name="estadoCivilPessoa" id="estadoCivilPessoa" placeholder="Estado Civil" required>
                    </div>
                    <div class="col-md-2">
                        <label for="ativoPessoa">Ativo</label>
                        <select class="form-control" name="ativoPessoa" id="ativoPessoa" required>
                            <option value="0" >Selecione uma Opção</option>
                            <option value="0" >Inativo</option>
                            <option value="1" >Ativo</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="profissaoPessoa">Profissão</label>
                        <select class="form-control" name="profissaoPessoa" id="profissaoPessoa" required>
                            <option value="1" >Selecione uma Opção</option>
                            @foreach ($professions as $profession)
                                <option value="{{$profession->id}}" >{{$profession->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
            {{-- <button type="cancel" class="btn btn-danger btn-sn">Cancelar</button> --}}
        </form>
            
    </div>      
@endsection