<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;
class ProfessionController extends Controller
{
    
    //exige que o usuario esteja autenticado para acessar o controller
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profission = Profession::paginate(5);
        return view('profession', compact('profission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profission = Profession::paginate(5);
        return view('newprofession',compact('profission'));
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
        $prof = new Profession();
        $prof->name = $request->input('nomeProfissao');
        $prof->media_salaria = $request->input('salarioProfissao');
        $prof->save();

        return redirect('/professions');
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
         //buscar a categoria que vai ser editada
         $prof = Profession::find($id);
         if(isset($prof)){
             return view('editprofession', compact('prof'));
         }
         return view('/professions');
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
       //buscar a profissao que vai ser editada
       $prof = Profession::find($id);

       if(isset($prof)){
        $prof->name = $request->input('nomeProfissao');
        $prof->media_salaria = $request->input('salarioProfissao');
        $prof->save();
       }
       return redirect('/professions');
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
        $prof = Profession::find($id);
        if(isset($prof)){
            $prof->delete();
        }
       return redirect('/professions');
    }
}
