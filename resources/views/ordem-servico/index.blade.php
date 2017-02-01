@extends('layouts.app')
@section('head')
    <link rel="stylesheet" type="text/css" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-building-o" aria-hidden="true"></i> Painel de Controle - Ordem de Serviço</h1>
        </div>
    </div>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-md-12">
            <h4>
                <a href="{{route('ordem-servico-create')}}" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Ordem de Serviço</a>
            </h4>
        </div>
    </div>
    @if(Auth::user()->cargo == "Administrador")
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-md-12">
                <table class="table table-hover grid" style="width: 100%">
                    <thead>
                    <tr>
                        <th width="10%">Nº Ordem de Serviço</th>
                        <th width="30%">Nome</th>
                        <th width="20%;">CPF</th>
                        <th hidden width="40%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($model  as $m)
                        <tr>
                            <td>{{$m->id_os}}</td>
                            <td>{{$m->nome}}</td>
                            <td>{{$m->cpf}}</td>
                            <td>
                                <div class="col-md-3">
                                    <a href="{{route('ordem-servico-excluir', ['id' => $m->id_os])}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-trash"></i> Excluir</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('ordem-servico-show', ['id' => $m->id_os])}}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-eye-open"></i> Visualizar / Imprimir</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('ordem-servico-edit', ['id' => $m->id_os])}}" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-md-12">
                <table class="table table-hover grid" style="width: 100%">
                    <thead>
                    <tr>
                        <th width="10%">Nº Ordem de Serviço</th>
                        <th width="40%">Nome</th>
                        <th width="20%;">CPF</th>
                        <th hidden width="30%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($model  as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nome}}</td>
                            <td>{{$m->cpf}}</td>
                            <td>
                                <div class="col-md-7">
                                    <a href="{{route('ordem-servico-show', ['id' => $m->id])}}" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-eye-open"></i> Visualizar / Imprimir</a>
                                </div>
                                <div class="col-md-5">
                                    <a href="{{route('ordem-servico-edit', ['id' => $m->id])}}" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
@section('script')
    {{--SCRIPT SERVIDOR--}}
    <script type="text/javascript" src="public/dataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="public/dataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/default.js"></script>
    {{--SCRIPT LOCAL--}}
    <script type="text/javascript" src="{{ asset('dataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/default.js') }}"></script>
@endsection