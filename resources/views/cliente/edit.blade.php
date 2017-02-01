@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i> Painel de Controle - Editar Cliente</h1>
        </div>
    </div>
    <div class="well well-sm">
        <form action="{{route('cliente-update', ['id'=>$model->id])}}"method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row form-group">
                <div class="col-md-6">
                    <label>Nome:</label>
                    <input type="text" name="nome" value="{{$model->nome}}" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label>Data de Nascimento:</label>
                    <input type="text" name="data_nascimento" value="{{$model->data_nascimento}}" id="data1" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label>RG:</label>
                    <input type="text" name="rg" id="rg" value="{{$model->rg}}" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label>CPF:</label>
                    <input type="text" name="cpf" value="{{$model->cpf}}" id="cpf" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label>Endereço:</label>
                    <input type="text" name="endereco" value="{{$model->endereco}}" class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <label>Profissão:</label>
                    <input type="text" name="profissao" value="{{$model->profissao}}" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Renda:</label>
                    <input type="text" id="demo4" class="form-control" name="renda" value="{{$model->renda}}" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8">
                    <label>Referência 1:</label>
                    <input type="text" name="referencia1" value="{{$model->referencia1}}" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Telefone:</label>
                    <input type="text" id="tel1" class="form-control" value="{{$model->tel_referencia1}}" name="tel_referencia1" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-8">
                    <label>Referência 2:</label>
                    <input type="text" name="referencia2" value="{{$model->referencia2}}" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Telefone:</label>
                    <input type="text" id="tel2" class="form-control" value="{{$model->tel_referencia2}}" name="tel_referencia2" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-2">
                        <a href="{{route('cliente-index')}}"class="btn btn-default">Cancelar</a>
                    </div>
                    <div class="col-md-10 text-right">
                        <button class="btn btn-success">Salvar Alterações</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $('#data1, #data2, #data3').mask('99/99/9999');
    </script>
@endsection