@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-eercast" aria-hidden="true"></i> Painel de Controle - Editar Armação</h1>
        </div>
    </div>
    <div class="well well-sm">
        <form action="{{route('armacao-update', ['id'=>$model->id])}}"method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row form-group">
                <div class="col-md-12">
                    <label>Descrição:</label>
                    <input type="text" name="descricao" value="{{$model->descricao_ar}}" class="form-control" required>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-2">
                        <a href="{{route('armacao-index')}}"class="btn btn-default">Cancelar</a>
                    </div>
                    <div class="col-md-10 text-right">
                        <button class="btn btn-success">Salvar Alterações</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection