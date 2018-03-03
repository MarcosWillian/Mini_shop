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

/* Home Rotas */
Route::get('/', 
	['as'=>'home', 'uses'=>'Admin\HomeController@index']);

/* Usuários Rotas */
Route::get('/usuarios', 
	['as'=>'usuarios', 'uses'=>'Admin\UserController@index']);
Route::get('/usuario/cadastrar', 
	['as'=>'usuario.cadastrar', 'uses'=>'Admin\UserController@cadastrar']);
Route::post('/usuario/salvar', 
	['as'=>'usuario.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/usuario/editar/{id}', 
	['as'=>'usuario.editar', 'uses'=>'Admin\UserController@editar']);
Route::post('/usuario/atualizar/{id}', 
	['as'=>'usuario.atualizar', 'uses'=>'Admin\UserController@atualizar']);
Route::get('/usuario/deletar/{id}', 
	['as'=>'usuario.deletar', 'uses'=>'Admin\UserController@deletar']);