<?php

//rota com prefixo produto
Route::group(['prefix' => 'produto'], function(){
	Route::get('/listaprodutos','ProdutoController@listaprodutos');
	Route::get('/detalhes/{id}','ProdutoController@detalhes');
	Route::get('/novoproduto', 'ProdutoController@novoproduto');
	Route::post('/adicionaproduto','ProdutoController@adicionaproduto');
	Route::get('/removeproduto{id}','ProdutoController@removeproduto');
	Route::get('/{id}/edit','ProdutoController@edit');
	Route::post('/listaprodutos{id}','ProdutoController@update');
	Route::post('/busca','ProdutoController@busca');
	Route::get('/download/pdf', 'ProdutoController@download');
	//Route::get('/export', 'ProdutoController@export');
	Route::get('/export', 'ProdutoController@export');
	
});

//rotas com prefixo clientes
Route::group(['prefix' => 'cliente'], function(){
	Route::get('/listaclientes','ClienteController@listaclientes');
	Route::get('/novocliente', 'ClienteController@novocliente');
	Route::post('/adicionacliente','ClienteController@adicionacliente');
	Route::get('/detalhes/{id}','ClienteController@detalhes');
	Route::get('/removecliente{id}','ClienteController@removecliente');
	Route::get('/{id}/edit','ClienteController@edit');
	Route::post('/listaclientes{id}','ClienteController@update');
	Route::post('/busca','ClienteController@busca');
	Route::get('/download/pdf', 'ClienteController@download');
	//Route::get('/export', 'ClienteController@export');

});

//rotas com prefixo ordem
Route::group(['prefix' => 'ordem'], function(){
	Route::get('/listaordens','OrdemController@listaordens');
	Route::get('/novaordem', 'OrdemController@novaordem');
	Route::post('/adicionaordem','OrdemController@adicionaordem');
	Route::get('/detalhes/{id}','OrdemController@detalhes');
	Route::get('/removeordem{id}','OrdemController@removeordem');
	Route::get('/{id}/edit','OrdemController@edit');
	Route::post('/listaordens{id}','OrdemController@update');
	Route::post('/busca','OrdemController@busca');
	Route::post('/buscar','OrdemController@buscar');
	Route::get('/export', 'OrdemController@export');
	Route::get('/finalizaordem','OrdemController@finalizaordem');

});

Route::get('/', function () {
	return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
