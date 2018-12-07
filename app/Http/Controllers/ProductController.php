<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Carrinho;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $prods = Product::paginate(15);
        return view('product', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all(); 
        return view('newproduct', compact('cats'));  
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
        $prod = new Product();
        $prod->name = $request->input('nomeProduto');
        $prod->unidade = $request->input('unidadeProduto');
        $prod->estoque = $request->input('estoqueProduto');
        $prod->valor = $request->input('valorProduto');
        $prod->category_id = $request->input('categoriaProduto');
        $prod->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product, $id)
    {   
         $cats = Category::all(); 
        //buscar o produto que vai ser editado
         $prod = Product::find($id);
         if(isset($prod)){
             return view('editproduct', compact('prod', 'cats'));
         }
         return view('/produtct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, $id)
    {
        //buscar o produto que vai ser editada
        $prod = Product::find($id);

        if(isset($prod)){
            $prod->name = $request->input('nomeProduto');
            $prod->unidade = $request->input('unidadeProduto');
            $prod->estoque = $request->input('estoqueProduto');
            $prod->valor = $request->input('valorProduto');
            $prod->category_id = $request->input('categoriaProduto');
            $prod->save();
        }
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product, $id)
    {
         //apaga uma categoria
         $prod = Product::find($id);
         if(isset($prod)){
             $prod->delete();
         }
        return redirect('/product');
       
    }

    
}
