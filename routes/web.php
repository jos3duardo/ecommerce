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

Route::get('/calendar', 'CategoryController@calendar')->name('calendar');

Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/new', 'ProductController@create');
Route::post('/product', 'ProductController@store');
// retorna uma view com o formulario de edição
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');
