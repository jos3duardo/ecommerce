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


Route::get('/','HomeController@index')->name('home');   

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('home');
Route::get('/teste', 'HomeController@teste');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/new', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
// retorna uma view com o formulario de edição
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@destroy');
//Json com todas as categorias
Route::get('/categoryJson', 'CategoryController@categoryJson');

Route::get('/calendar', 'CategoryController@calendar')->name('calendar');

//CRUD produtos
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/new', 'ProductController@create');
Route::post('/product', 'ProductController@store');
// retorna uma view com o formulario de edição
Route::get('/product/edit/{id}', 'ProductController@edit');
//atualiza produto
Route::post('/product/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');



//listando usuarios por endereço
Route::get('/users', function (){
    $users = User::all();
    foreach ($users as $u) {
        echo "<p> ID: ".$u->id."</p>";
        echo "<p> Nome: ".$u->name."</p>";
        echo "<p> Email: ".$u->email."</p>";
        echo "<p> Rua: ".$u->endereco->rua."</p>";
        echo "<p> Numero: ".$u->endereco->numero."</p>";
        echo "<p> Bairro: ".$u->endereco->bairro."</p>";
        echo "<p> Cidade: ".$u->endereco->cidade."</p>";
        echo "<p> UF: ".$u->endereco->uf."</p>";
        echo "<p> CEP: ".$u->endereco->cep."</p>";

    }
});

Route::get('/enderecos', function (){
    $ends = Endereco::all();
    foreach ($ends as $end) {
        echo "<p> ID do Cliente: ".$end->user_id."</p>";
        echo "<p> Rua: ".$end->rua."</p>";
        echo "<p> Numero: ".$end->numero."</p>";
        echo "<p> Bairro: ".$end->bairro."</p>";
        echo "<p> Cidade: ".$end->cidade."</p>";
        echo "<p> UF: ".$end->uf."</p>";
        echo "<p> CEP: ".$end->cep."</p>";
    }
});