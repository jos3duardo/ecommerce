<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Endereco;

Auth::routes();
Route::get('/','ProductController@index'); 



Route::get('/painel', 'HomeController@index');
Route::get('/teste', 'HomeController@teste');
Route::get('/registro', 'HomeController@teste');
Route::get('/users/new', 'HomeController@create');
Route::get('/users/edit/{id}', 'HomeController@edit');
Route::post('/users', 'HomeController@store');
Route::post('/users/{id}', 'HomeController@update');
Route::get('/users/delete/{id}', 'HomeController@destroy');
Route::get('/home', 'HomeController@index');


// rota Category
Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/category', 'CategoryController@store');
// retorna uma view com o formulario de edição
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@destroy');
//Json com todas as categorias
Route::get('/categoryJson', 'CategoryController@categoryJson');

//teste de retorno para uma view de calendar
//sera implementado futuramente
Route::get('/calendar', 'CategoryController@calendar')->name('calendar');


//CRUD de  professions
Route::get('/professions', 'ProfessionController@index');
Route::get('/professions/edit/{id}', 'ProfessionController@edit');
Route::post('/professions', 'ProfessionController@store');
Route::post('/professions/{id}', 'ProfessionController@update');
Route::get('/professions/delete/{id}', 'ProfessionController@destroy');

// crud pessoa
Route::get('/pessoa', 'PessoaController@index');
Route::get('/pessoa/new', 'PessoaController@create');
Route::get('/pessoa/edit/{id}', 'PessoaController@edit');
Route::post('/pessoa', 'PessoaController@store');
Route::post('/pessoa/{id}', 'PessoaController@update');
Route::get('/pessoa/delete/{id}', 'PessoaController@destroy');

// CRUD USERS
Route::get('/user' ,'UserController@index');

// COMPRAS
Route::get('/compras', "CompraController@index");
Route::get('/compras', "CompraController@index");

//CRUD produtos
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/new', 'ProductController@create');
Route::post('/product', 'ProductController@store');
// retorna uma view com o formulario de edição
Route::get('/product/edit/{id}', 'ProductController@edit');
//atualiza produto
Route::post('/product/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');


// carrinho
Route::get('/carrinho', "CarrinhoController@index");
Route::get('/carrinho/comprar/{pessoa}/{id}', "CarrinhoController@comprar");
Route::get('/carrinho/limparCarrinho', "CarrinhoController@limparCarrinho");
Route::get('/carrinho/{id}', "CarrinhoController@destroy");
Route::get('/carrinho/up/{id}', "CarrinhoController@atualizaProduto");
Route::get('/carrinho/finaliza/{id}', "CarrinhoController@finalizaPedido");
Route::get('/pedidos', "CarrinhoController@produtosCarrinho");
// criando um carrinho para um usuario
//a partir daqui o sistema começa a funcionar como um caixa
Route::get('/carrinho/edit/{id}', 'CarrinhoController@edit');
// Route::get('/userCarrinho/{id}', 'CarrinhoController@carrinhoCliente');
Route::post('/userCarrinho', 'CarrinhoController@criarCarrinho');
Route::post('/addprodutocarrinho/{id}', 'CarrinhoController@addprodutocarrinho');

