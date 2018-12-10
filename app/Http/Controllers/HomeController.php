<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::all();
        return view('home', compact('users'));
    }

    public function teste()
    {
        
        $users = User::all();
        return view('teste', compact('users'));
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'Cliente',
            'password' => Hash::make($data['password']),
        ]);
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
        $user = new User();
        $user->nome = $request->input('name');
        $user->email = $request->input('name');
        // $user->salario = $request->input('salarioUser');
        // $user->data_nascimento = $request->input('DataNascimentoUser');
        // $user->estado_civil = $request->input('estadoCivilUser');
        // $user->ativo = $request->input('ativouser');
        // $user->profissao_id = $request->input('profissaoUser');
        $user->save();

        return redirect('/painel');
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
        //buscar a user que vai ser editada
        // $professions = Profession::all();
        $user = User::find($id); 
         if(isset($user)){
             return view('edituser', compact('user'));
         }
         return view('/painel');
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
        //buscar a user que vai ser editada
        $user = User::find($id);
        $User->nome = $request->input('nomeUser');
        // $User->salario = $request->input('salarioUser');
        // $User->data_nascimento = $request->input('DataNascimentoUser');
        // $User->estado_civil = $request->input('estadoCivilUser');
        // $User->ativo = $request->input('ativoUser');
        // $User->profissao_id = $request->input('profissaoUser');
        $User->save(); 
        return redirect('/painel');

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
        $users = User::find($id);
        if(isset($users)){
            $users->delete();
        }
       return redirect('/painel');
    }
}
