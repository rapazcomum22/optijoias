<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function(){ return redirect('/admin'); });

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', ['as' => 'main-index', 'uses' => 'SystemController@index']);

//    API DO SISTEMA
    Route::get('/API/getAtletas', ['as' => 'buscar-atletas', 'uses' => 'OrdemServicoController@getClienteJSON']);
    Route::get('/API/getFuncionario', ['as' => 'buscar-funcionario', 'uses' => 'OrdemServicoController@getFuncionarioJSON']);

//    ROTA CHECK LIST
    Route::get('/check-list', ['as' => 'check-list-index', 'uses' => 'CheckListController@index']);

//    ROTAS USUARIO DO SISTEMA
    Route::get('/usuario', ['as' => 'usuario-index', 'uses' => 'UsuarioController@index']);
    Route::get('/usuario/create', ['as' => 'usuario-create', 'uses' => 'UsuarioController@create']);
    Route::post('/usuario/adiciona', ['as' => 'usuario-adiciona', 'uses' => 'UsuarioController@adiciona']);
    Route::get('/usuario/edit/{id}', ['as' => 'usuario-edit', 'uses' => 'UsuarioController@edit']);
    Route::post('/usuario/update/{id}', ['as' => 'usuario-update', 'uses' => 'UsuarioController@update']);
    Route::post('/usuario/update/desativado/{id}', ['as' => 'usuario-update-desativado', 'uses' => 'UsuarioController@updateDesativa']);
    Route::post('/usuario/update/ativado/{id}', ['as' => 'usuario-update-ativado', 'uses' => 'UsuarioController@updateAtiva']);

//    ROTAS CLIENTE
    Route::get('/cliente', ['as' => 'cliente-index', 'uses' => 'ClienteController@index']);
    Route::get('/cliente/create', ['as' => 'cliente-create', 'uses' => 'ClienteController@create']);
    Route::post('/cliente/adiciona', ['as' => 'cliente-adiciona', 'uses' => 'ClienteController@adiciona']);
    Route::get('/cliente/edit/{id}', ['as' => 'cliente-edit', 'uses' => 'ClienteController@edit']);
    Route::post('/cliente/update/{id}', ['as' => 'cliente-update', 'uses' => 'ClienteController@update']);

//    ROTAS ORDEM DE SERVIÇO
    Route::get('/ordem-servico', ['as' => 'ordem-servico-index', 'uses' => 'OrdemServicoController@index']);
    Route::get('/ordem-servico/create', ['as' => 'ordem-servico-create', 'uses' => 'OrdemServicoController@create']);
    Route::post('/ordem-servico/adiciona', ['as' => 'ordem-servico-adiciona', 'uses' => 'OrdemServicoController@adiciona']);
    Route::get('/ordem-servico/edit/{id}', ['as' => 'ordem-servico-edit', 'uses' => 'OrdemServicoController@edit']);
    Route::post('/ordem-servico/update/{id}', ['as' => 'ordem-servico-update', 'uses' => 'OrdemServicoController@update']);
    Route::get('/ordem-servico/view/{id?}',   ['as' => 'ordem-servico-show', 'uses'    => 'OrdemServicoController@show']);
    Route::get('/ordem-servico/destroy/{id}', ['as' => 'ordem-servico-excluir', 'uses' => 'OrdemServicoController@destroy']);

//    ROTAS ARMACAO
    Route::get('/armacao', ['as' => 'armacao-index', 'uses' => 'ArmacaoController@index']);
    Route::get('/armacao/create', ['as' => 'armacao-create', 'uses' => 'ArmacaoController@create']);
    Route::post('/armacao/adiciona', ['as' => 'armacao-adiciona', 'uses' => 'ArmacaoController@adiciona']);
    Route::get('/armacao/edit/{id}', ['as' => 'armacao-edit', 'uses' => 'ArmacaoController@edit']);
    Route::post('/armacao/update/{id}', ['as' => 'armacao-update', 'uses' => 'ArmacaoController@update']);

//    ROTAS LENTES
    Route::get('/lentes', ['as' => 'lentes-index', 'uses' => 'LentesController@index']);
    Route::get('/lentes/create', ['as' => 'lentes-create', 'uses' => 'LentesController@create']);
    Route::post('/lentes/adiciona', ['as' => 'lentes-adiciona', 'uses' => 'LentesController@adiciona']);
    Route::get('/lentes/edit/{id}', ['as' => 'lentes-edit', 'uses' => 'LentesController@edit']);
    Route::post('/lentes/update/{id}', ['as' => 'lentes-update', 'uses' => 'LentesController@update']);

//    ROTAS RELATORIOS
    Route::get('/relatorio', ['as' => 'relatorio-geral-index', 'uses' => 'RelatorioController@indexGeral']);
    Route::get('/relatorio/geral', ['as' => 'relatorio-geral-filtro', 'uses' => 'RelatorioController@relatorioGeral']);
    Route::get('/relatorio/cliente', ['as' => 'relatorio-cliente-index', 'uses' => 'RelatorioController@indexCliente']);
    Route::get('/relatorio/cliente/ordem-servico/view/{id}', ['as' => 'relatorio-cliente-show', 'uses' => 'RelatorioController@relatorioClienteShow']);
    Route::get('/relatorio/vendedor', ['as' => 'relatorio-vendedor-index', 'uses' => 'RelatorioController@indexVendedor']);
    Route::get('/relatorio/vendedor/ordem-servico/view/{id}', ['as' => 'relatorio-vendedor-show', 'uses' => 'RelatorioController@relatorioVendedorShow']);

//    ROTAS PAINEL FINANCEIRO
    Route::get('/financeiro', ['as' => 'financeiro-index', 'uses' => 'FinanceiroController@indexGeral']);



});