@extends('layouts.app')
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
            <h1><i class="fa fa-user" aria-hidden="true"></i> Painel de Controle - Adicionar Usuário</h1>
        </div>
    </div>
    <div class="well well-sm">
        <form action="{{route('usuario-adiciona')}}"method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row form-group">
                <div class="col-md-4">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Usuário:</label>
                    <input type="text" name="usuario" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Senha:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Cargo:</label><br>
                    <select name="cargo" class="form-control">
                        <option value="Administrador">Administrador</option>
                        <option value="Vendedor">Vendedor(a)</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Data de Nascimento:</label>
                    <input type="text" name="data_nascimento" id="data1" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Data de Admissão:</label>
                    <input type="text" name="data_admissao" id="data2" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Endereço:</label>
                    <input type="text" name="endereco" class="form-control" required>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-2">
                        <a href="{{route('usuario-index')}}"class="btn btn-default">Cancelar</a>
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
        $('#data1, #data2').mask('99/99/9999');
    </script>
@endsection