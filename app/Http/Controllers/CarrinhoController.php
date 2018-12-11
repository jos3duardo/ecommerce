<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Product;
use App\Compra;
use App\CompraProduto;
use App\Pessoa;
use App\CarrinhoProdutos;

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

        $prodCar = CarrinhoProdutos::where([
            'carrinho_id' => $carrinho->id//informa o id do usuario logado
        ])->get();
       
        if(isset($carrinho)){
            return view('editpedidos', compact('carrinho','produtos','prodCar'));
        }
        return view('/editpedidos');
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

    // public function comprar(Request $request, $carrinho, $produto) {
        public function comprar($carrinho, $produto) {

        // $carrinho = Carrinho::find($carrinho);
        $prod = Product::find($produto);
        // $carrinho->produto_id = $prod->id;
        // $carrinho->quantidade = 1;
        // $carrinho->user_id = Auth::user()->id;
        // $carrinho->pessoa_id = $pessoa;
        // $carrinho->save();

        $prodCar = new CarrinhoProdutos();
        $prodCar->carrinho_id = $carrinho;
        $prodCar->pessoa_id = 2;
        $prodCar->produto_id =  $prod->id;
        // $prodCar->quantidade = $request->input('quantidadeProduto');
        $prodCar->quantidade = 2;
        $prodCar->status = 0;
        $prodCar->save();


       
        return redirect('/pedidos/edit/'.$carrinho, compact('prodCar'));
        // return redirect('/pedidos');

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

        // cria uma nova compra
        $compra = new Compra();
        // crian uma nova compraProduto para guardar os itens da compra
        $compraProduto = new CompraProduto();
        // localiza quais os produtos que seram vendidos
        $prodCar = CarrinhoProdutos::find($id);

        // add aos campos da nova compra os valores que estão no pedido
        $compra->valor_total = 1000;
        $compra->data = $prodCar->created_at;
        $compra->pagamento_realizado = 0;
        $compra->pessoa_id = $prodCar->pessoa_id;
        $compra->save();

        
        // salva todos os produtos que estão no pedido
        foreach ($prodcar as $prod) {
            // add aos campos do compraproduto os calores que estão vindo do pedido
            $compraProduto->compra_id = $compra->id;
            $compraProduto->produto_id = $prod->id;
        }
        $compraProduto->save();

        // muda o status para 1 indicando que o pedido foi finalizado
        $prodCar->status = 1;
        $prodCar->save();

        
        foreach($carrinhos as $carrinho){
            $compraProduto->compra_id =  $prodCar->$compra->id;
            $compraProduto->produto_id = $prodCar->produto_id;
            $compraProduto->quantidade = $prodCar->quantidade;
        }
        $compraProduto->save();
        
        return view('/compras');
        
    }

    // indexCarrinho da area administrativa
    //  mostra uma relaçao de todos os pedidos em aberto
    public function produtosCarrinho(){

        $pessoas = Pessoa::all();
        $carrinhos = Carrinho::paginate(15);   

        return view('pedidos', compact('carrinhos','pessoas'));
    }



    public function criarCarrinho(Request $request){

        $carrinho = new Carrinho();
        $carrinho->user_id = Auth::user()->id;
        $carrinho->status = 0;
        $carrinho->pessoa_id = $request->input('nomePessoa');
        $carrinho->save();
        return redirect('/pedidos');
    }

    // public function addprodutocarrinho(Request $request, $id){
        
    //     //recebe os dados do formulario
    //     $carrinho = Carrinho::find($id);  
    //     $carrinho->produto_id = $request->input('nomeProduto');
    //     $carrinho->save();
        

    //     $carrinhos = Carrinho::where([
    //         'user_id' =>$carrinho->pessoa->id//informa o id do usuario logado
    //     ])->get();
    //     return view('carrinho/edit/$id', compact('carrinhos'));
    // }


    // add um item no carrinhoProdutos
    public function carrinhoAdd(Request $request, $carrinho){

        $car = Carrinho::find($carrinho);  

        $prodCar = new CarrinhoProdutos();
        $prodCar->carrinho_id = $car->id;
        $prodCar->pessoa_id = $car->pessoa_id;
        $prodCar->produto_id =  $request->input('nomeProduto');
        $prodCar->quantidade = $request->input('quantidadeProduto');
        $prodCar->status = 0;
        $prodCar->save();

        return redirect('/pedidos/edit/'.$carrinho);

    }

    // apaga o id do produto que esta no pedido
    public function apagaItemPedido($carrinho,$id)
    {
        //procura na tabela carrinho_produtos o id que esta vindo via url
         $prodCar = CarrinhoProdutos::find($id);
         if(isset($prodCar)){
             $prodCar->delete();
         }
         return redirect('/pedidos/edit/'.$carrinho);
       
    }
    
}
