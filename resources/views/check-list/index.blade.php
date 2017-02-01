@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-check" aria-hidden="true"></i> Check List do Sistema</h1>
        </div>
    </div>
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
                            <span class="badge">Backlog</span>
                            Relátorio Cliente com Historico de Ordem de Serviço
                        </li>
                        <li class="list-group-item">
                            <span class="badge">Backlog</span>
                            Relátorio Vendedor com Historico de Ordem de Serviço
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
