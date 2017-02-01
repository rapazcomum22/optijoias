@extends('layouts.app')
@section('head')
    {{--STYLE SERVIDOR--}}
    <link rel="stylesheet" type="text/css" href="public/dataTables/media/css/dataTables.bootstrap.min.css"/>
    {{--STYLE LOCAL--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-eercast" aria-hidden="true"></i> Painel de Controle - Armação</h1>
        </div>
    </div>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-md-12">
            <h4>
                <a href="{{route('armacao-create')}}" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Armação</a>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover grid" style="width: 100%">
                <thead>
                <tr>
                    <th>Descricao</th>
                    <th hidden></th>
                </tr>
                </thead>
                <tbody>
                @foreach($model  as $m)
                    <tr>
                        <td>{{$m->descricao_ar}}</td>
                        <td width="100px"><a href="{{route('armacao-edit', ['id' => $m->id])}}" class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
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