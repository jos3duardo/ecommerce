@extends('layouts.painel')
@section('content')

    <div class="content">
        <h3>Cadastrar uma nova Profissão</h3>
        <div class="row">
            <form action="/professions" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-md-6">
                        {{-- <label for="nomeProfissao">Nome da Profissão</label> --}}
                        <input type="text" class="form-control" name="nomeProfissao" 
                            id="nomeProfissao" placeholder="Profissão">
                    </div>
                    <div class="col-md-3">
                        {{-- <label for="salarioProfissao">Media Salarial da Profissão</label> --}}
                        <input type="number " class="form-control" name="salarioProfissao" 
                            id="salarioProfissao" placeholder="R$ 0.00">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Profissões Cadastradas</h3>
                @if (count($profission) > 0)
                    <table class="table table-hover panel">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Media Salarial</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profission as $prof)
                                <tr>
                                    <td>{{ $prof->id }}</td>
                                    <td>{{ $prof->name }}</td>
                                    <td>R$ {{ $prof->media_salaria }}</td>
                                    <td>
                                        <a href="/professions/edit/{{ $prof->id }}" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="/professions/delete/{{ $prof->id }}" class="btn btn-sm btn-danger">Apagar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                <h5>Exibindo {{$profission->count()}} Profissões do total de {{$profission->total()}} ({{$profission->firstItem()}} a {{$profission->lastItem()}})</h5>
                    <div class="center">
                        {{$profission->links()}}
                    </div>
                {{-- não precisa do botao porque ja tem um formulario de cadastro na parte superior da pagina --}}
                {{-- <div class="card-footer">
                <a href="/professions/new" class="btn btn-sn btn-primary" role="button">Nova Profissão</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection     