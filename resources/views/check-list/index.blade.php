@extends('layouts.app')
@section('head')
    <style>
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            color: #ffffff;
            cursor: default;
            background-color: red;
            border: 1px solid red;
            border-bottom-color: transparent;
        }
        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0;
            color: red;
        }
        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd;
        }

        .nav>li>a:focus, .nav>li>a:hover {
            text-decoration: none;
            background-color: #bd2121;
            color: #ffffff;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-check" aria-hidden="true"></i> Check List do Sistema</h1>
        </div>
    </div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#ativides_concluidas">Funcionalidades Concluidas</a></li>
        <li><a data-toggle="tab" href="#backlog">Funcionalidades para fazer / Backlog</a></li>
        <li><a data-toggle="tab" href="#banco">Banco de Dados</a></li>
    </ul>

    <div class="tab-content">
        <div id="ativides_concluidas" class="tab-pane fade in active">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-12">
                        <h4><span class="label label-danger">Administrador</span></h4>
                        <div class="well well-sm">
                            <h4><span class="label label-default">Úsuario</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Cadastrar Usuário/Funcionário
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Editar Usuário/Funcionário
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Desativar Usuário/Funcionário
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Ativar Usuário/Funcionário
                                </li>
                            </ul>

                            <h4><span class="label label-default">Ordem de Serviço</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Excluir Ordem de Serviço
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4><span class="label label-warning">Todas as Permissões</span></h4>
                        <div class="well well-sm">
                            <h4><span class="label label-default">Cliente</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Cadastrar Cliente
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Editar Cliente
                                </li>
                            </ul>
                            <h4><span class="label label-default">Ordem de Serviço</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Cadastrar Ordem de Serviço
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Editar  Ordem de Serviço
                                </li>
                            </ul>
                            <h4><span class="label label-default">Armação</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Cadastrar Armação
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Editar Armação
                                </li>
                            </ul>
                            <h4><span class="label label-default">Lentes</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Cadastrar Lentes
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Editar Lentes
                                </li>
                            </ul>
                            <h4><span class="label label-default">Relatórios</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Relatório Geral
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Relátorio Cliente com Historico de Ordem de Serviço
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Completo</span>
                                    Relátorio Vendedor com Historico de Ordem de Serviço
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--NAV TAB BACKLOG--}}
        <div id="backlog" class="tab-pane fade">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-12">
                        <h4><span class="label label-danger">Administrador</span></h4>
                        <div class="well well-sm">
                            <h4><span class="label label-default">Fornecedor</span></h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">Backlog</span>
                                    Cadastrar Fornecedor
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">Backlog</span>
                                    Editar Fornecedor
                                </li>
                            </ul>
                            {{--<h4><span class="label label-default">Ordem de Serviço</span></h4>--}}
                            {{--<ul class="list-group">--}}
                                {{--<li class="list-group-item">--}}
                                    {{--<span class="badge">Completo</span>--}}
                                    {{--Excluir Ordem de Serviço--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banco" class="tab-pane fade">
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 50px;">
                        <img src="{{asset('images/img_banco_dados.jpg')}}" width="100%" alt="" >
                </div>
            </div>
        </div>
    </div>
@endsection
