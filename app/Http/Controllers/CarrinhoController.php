<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Product;
use App\Compra;
use App\CompraProduto;
use App\Pessoa;

class CarrinhoController extends Controller
{
    //exige que o usuario esteja logado para acessar o controller
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
        // $carrinhos = Carrinho::paginate(15);

        // este metodo retorna somente os pedidos do carrinho do usuario que esta logado
        $carrinhos = Carrinho::where([
            'user_id' => Auth::id()//informa o id do usuario logado
        ])->get();
        return view('carrinho', compact('carrinhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carrinhos = Carrinho::all();
        return view('newcarrinho', compact('carrinhos')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrinho = new Carrinho();
        $carrinho->user_id = $request->input('nomePessoa');
        $carrinho->save();
        return redirect('/pedidos');
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
        $produtos = Product::all();
        //buscar a categoria que vai ser editada
        $carrinho = Carrinho::find($id);
       
        if(isset($carrinho)){
            return view('editcarrinho', compact('carrinho','produtos'));
        }
        return view('/pedidos');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //apaga uma item do carrinho
       $carrinho = Carrinho::find($id);
       if(isset($carrinho)){
           $carrinho->delete();
       }
       return redirect('/carrinho');
    }

    public function comprar(Request $request, $pessoa, $id) {

        $carrinho = new Carrinho();
        $prod = Product::find($id);
        $carrinho->produto_id = $prod->id;
        // $carrinho->quantidade = 1;
        $carrinho->user_id = Auth::user()->id;
        $carrinho->pessoa_id = $pessoa;
        
        $carrinho->save();

        return redirect('/carrinho');

    }
    public function limparCarrinho(){
        $carrinhos = Carrinho::all();
        if(isset($carrinhos)){
            $carrinhos->trashed();
        }
       return redirect('/product');

    }

    public function atualizaProduto(Request $request, $id){
   
        $carrinho = Carrinho::find($id);
        if(isset($carrinho)){

            $carrinho->quantidade = $request->input('estoqueProduto');
            // $carrinho->quantidade = $request->input('quantidadeProduto');
            $carrinho->save();
        }
       return redirect('/carrinho');
    }

    public function finalizaPedido(Request $request, $id){

        $compra = new Compra();
        $compraProduto = new CompraProduto();
        $carrinhos = Carrinho::all();

        $compra->valor_total = 0;
        $compra->data = "2018/12/26";
        $compra->pagamento_realizado = 0;
        $compra->pessoa_id = 1;
        $compra->save();
        
        foreach($carrinhos as $carrinho){
            $compraProduto->compra_id = $compra->id;
            $compraProduto->produto_id = $carrinho->produto_id;
            $compraProduto->quantidade = 2;

        }
        $compraProduto->save();
        return redirect('/compras');
    }

    // indexCarrinho da area administrativa
    public function produtosCarrinho(){

        $pessoas = Pessoa::all();
        $carrinhos = Carrinho::all();   

        return view('pedidos', compact('carrinhos','pessoas'));
    }
    public function criarCarrinho(Request $request){

        $carrinho = new Carrinho();
        $carrinho->user_id = Auth::user()->id;
        $carrinho->pessoa_id = $request->input('nomePessoa');
        $carrinho->save();
        return redirect('/pedidos');
    }

    public function addprodutocarrinho(Request $request, $id){
        
        //recebe os dados do formulario
        $carrinho = Carrinho::find($id);  
        $carrinho->produto_id = $request->input('nomeProduto');
        $carrinho->save();
        

        $carrinhos = Carrinho::where([
            'user_id' =>$carrinho->pessoa->id//informa o id do usuario logado
        ])->get();
        return view('carrinho/edit/$id', compact('carrinhos'));
    }
    
}
