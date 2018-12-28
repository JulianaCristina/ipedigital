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

Route::get('/', function () {
	return view('auth.login');
});
Route::get('admin/layout', function () {
	return view('admin.layout');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



	Route::get('/cliente', 'ClienteController@index');
	Route::get('/cliente/listaCliente', 'ClienteController@listarCliente');
	Route::post('/cliente/salvar', 'ClienteController@salvar');
	Route::get('/cliente/excluir', 'ClienteController@excluir');


	Route::get('/produto', 'ProdutoController@index');
	Route::get('/produto/listaProduto', 'ProdutoController@listarProduto');
	Route::post('/produto/salvar', 'ProdutoController@salvar');
	Route::get('/produto/excluir', 'ProdutoController@excluir');

	Route::get('/venda', 'VendaController@index');
	Route::get('/venda/listaVenda', 'VendaController@listarVenda');
	Route::post('/venda/salvar', 'VendaController@salvar');
	Route::get('/venda/excluir', 'VendaController@excluir');

