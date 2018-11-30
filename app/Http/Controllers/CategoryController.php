<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importa o modelo
use App\Category;

class CategoryController extends Controller
{
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
        $cats = Category::all();
        return view('/category', compact('cats'));
      
    }

    public function calendar()
    {
       
        return view('calendar');
    }

    public function categoryJson()
    {
        $cats = Category::with('produtos')->get();
        return $cats->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recebe os dados do formulario
        $cat = new Category();
        $cat->name = $request->input('nomeCategoria');
        $cat->save();
        return redirect('/category');
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
        $cat = Category::find($id);
        if(isset($cat)){
            return view('editcategory', compact('cat'));
        }
        return view('/category');

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
        //buscar a categoria que vai ser editada
        $cat = Category::find($id);

        if(isset($cat)){
            $cat->nome = $request->input('nomeCategoria');
            $cat->save();
        }
        return redirect('/category');

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
        $cat = Category::find($id);
        if(isset($cat)){
            $cat->delete();
        }
        return redirect('/category');
    }
}
