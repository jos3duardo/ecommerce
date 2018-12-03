<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Profession;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::paginate(10);
        return view('pessoa', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professions = Profession::all();
        $pessoas = Pessoa::all(); 
        return view('newpessoa', compact('pessoas', 'professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recebe os dados do formulario de profissoes
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nomePessoa');
        $pessoa->salario = $request->input('salarioPessoa');
        $pessoa->data_nascimento = $request->input('DataNascimentoPessoa');
        $pessoa->estado_civil = $request->input('estadoCivilPessoa');
        $pessoa->ativo = $request->input('ativoPessoa');
        $pessoa->profissao_id = $request->input('profissaoPessoa');
        $pessoa->save();

        return redirect('/pessoa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //buscar a pessoa que vai ser editada
        $professions = Profession::all();
        $pessoa = Pessoa::find($id); 
         if(isset($pessoa)){
             return view('editpessoa', compact('professions', 'pessoa'));
         }
         return view('/pessoa');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //buscar a pessoa que vai ser editada
        $pessoa = Pessoa::find($id);
        $pessoa->nome = $request->input('nomePessoa');
        $pessoa->salario = $request->input('salarioPessoa');
        $pessoa->data_nascimento = $request->input('DataNascimentoPessoa');
        $pessoa->estado_civil = $request->input('estadoCivilPessoa');
        $pessoa->ativo = $request->input('ativoPessoa');
        $pessoa->profissao_id = $request->input('profissaoPessoa');
        $pessoa->save(); 
        return redirect('/pessoa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //apaga uma categoria
        $pessoas = Pessoa::find($id);
        if(isset($pessoas)){
            $pessoas->delete();
        }
       return redirect('/pessoa');
    }
}
