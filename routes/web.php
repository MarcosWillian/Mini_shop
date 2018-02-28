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
    return view('welcome');
});

/* Usuários Rotas */
Route::get('/usuarios', ['as'=>'usuarios', 'uses'=>'Admin\UserController@index']);
Route::get('/usuario/cadastrar', ['as'=>'usuario.cadastrar', 'uses'=>'Admin\UserController@cadastrar']);
Route::post('/usuario/salvar', ['as'=>'usuario.salvar', 'uses'=>'Admin\UserController@salvar']);
Route::get('/usuario/editar', ['as'=>'usuario.editar', 'uses'=>'Admin\UserController@editar']);