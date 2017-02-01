@extends('layouts.app')
@section('head')
    <link rel="stylesheet" type="text/css" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>
@endsection
@section('content')
    {{--REDIRECIONAR SE O USUARIO NAO TIVER PERMISSÃO--}}
    <?php
    $redirect = route('main-index');
           if(Auth::user()->cargo == 'Vendedor'){
               header("location:$redirect");
           }
    ?>
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-user" aria-hidden="true"></i> Painel de Controle - Usuário</h1>
        </div>
    </div>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-md-12">
            <h4>
                <a href="{{route('usuario-create')}}" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Adicionar Usuário</a>
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover grid" style="width: 100%">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuario</th>
                    <th hidden></th>
                </tr>
                </thead>
                <tbody>
                @foreach($model  as $m)
                    @if($m->email != 'admin')
                    <tr>
                        <td>{{$m->name}}</td>
                        <td>{{$m->email}}</td>
                        @if($m->status == 'Ativo')
                            <td width="230px">
                                <div class="col-xs-7">
                                    <form action="{{route('usuario-update-desativado', ['id' => $m->id])}}" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="name" class="form-control" value="{{$m->name}}">
                                        <input type="hidden" name="usuario" class="form-control" value="{{$m->email}}">
                                        <input type="hidden" name="cargo" class="form-control" value="{{$m->cargo}}">
                                        <input type="hidden" name="data_nascimento" value="{{$m->data_nascimento}}" id="data1" class="form-control">
                                        <input type="hidden" name="data_admissao" value="{{$m->data_admissao}}" id="data2" class="form-control">
                                        <input type="hidden" name="data_exoneracao" value="{{$m->data_exoneracao}}" id="data3" class="form-control">
                                        <input type="hidden" name="endereco" value="{{$m->endereco}}" class="form-control">
                                        <button class="btn btn-sm btn-block btn-danger"><i class="glyphicon glyphicon-eye-close"></i> Desativar</button>
                                    </form>
                                </div>
                                <div class="col-xs-5">
                                    <a href="{{route('usuario-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                </div>
                            </td>
                        @else
                            <td width="230px">
                                <div class="col-xs-12">
                                    <a href="{{route('usuario-edit', ['id' => $m->id])}}"class="btn btn-sm btn-block btn-default"><i class="glyphicon glyphicon-eye-open"></i> Ativar</a>
                                </div>
                            </td>
                        @endif
                    </tr>
                    @endif
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