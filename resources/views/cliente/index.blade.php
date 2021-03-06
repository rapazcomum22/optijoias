@extends('layouts.app')
@section('head')
    <link rel="stylesheet" type="text/css" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i> Painel de Controle - Cliente</h1>
        </div>
    </div>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-md-12">
            <h4>
                <a href="{{route('cliente-create')}}" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Cliente</a>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover grid" style="width: 100%">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th hidden></th>
                </tr>
                </thead>
                <tbody>
                @foreach($model  as $m)
                        <tr>
                            <td>{{$m->nome}}</td>
                            <td>{{$m->rg}}</td>
                            <td>{{$m->cpf}}</td>
                            <td width="100px"><a href="{{route('cliente-edit', ['id' => $m->id])}}" class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    {{--SCRIPT SERVIDOR--}}
    <script type="text/javascript" src="/public/dataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/public/dataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/default.js"></script>
    {{--SCRIPT LOCAL--}}
    <script type="text/javascript" src="{{ asset('dataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/default.js') }}"></script>
@endsection