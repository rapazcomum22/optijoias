<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>S.G.S.O - RELATORIO - CLIENTE </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">
    <!-- Styles -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/simple-sidebar.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public//bootstrap-datepicker/dist/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>
    <style>
        .well{
            margin-bottom: 5px;
        }
    </style>
</head>
<body onload="window.print()">
<div class="container">
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Histórico de Orde {{$query->nome}} - CPF: {{$query->cpf}}</h3>
            </div>
        </div>
    </div>
    @foreach($listarOS as $l)
        <div class="well well-sm">
            <div class="row">
                <div class="col-xs-4"><strong>Ordem de Serviço:</strong> {{$l->id_os}}</div>
                <div class="col-xs-4"><strong>Data: </strong> {{date('d/m/Y', strtotime($l->data1))}}</div>
                <div class="col-xs-4"><strong>Data de Entrega:</strong> {{date('d/m/Y', strtotime($l->data_final))}}</div>
            </div>
            <div class="row">
                <div class="col-xs-4"><strong>Preço Total:</strong> {{$l->preco}}</div>
                <div class="col-xs-4"><strong>A Conta:</strong> {{$l->conta}}</div>
                <div class="col-xs-4"><strong>Saldo: </strong>{{$l->saldo}}</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="padding-top: 20px;">
                        <table width="100%" border="1">
                            <tbody>
                            <tr>
                                <td height="42" colspan="6" style="text-align: center; font-weight: bold">MEDIDAS PARA CONFECÇÃO DO ÓCULOS</td>
                            </tr>
                            <tr>
                                <td height="34" colspan="2" style="text-align: center; font-weight: bold">ÓCULOS</td>
                                <td width="20%" style="text-align: center; font-weight: bold">ESF.</td>
                                <td width="20%" style="text-align: center; font-weight: bold">CIL.</td>
                                <td width="20%" style="text-align: center; font-weight: bold">EIXO</td>
                                <td width="20%" style="text-align: center; font-weight: bold">DP.</td>
                            </tr>
                            <tr>
                                <td width="12%" rowspan="2" style="text-align: center; font-weight: bold">LONGE</td>
                                <td width="8%" height="34" style="text-align: center; font-weight: bold">O.D</td>
                                <td style="text-align: center">{{$l->longe_od_esf}}</td>
                                <td style="text-align: center">{{$l->longe_od_cil}}</td>
                                <td style="text-align: center">{{$l->longe_od_eixo}}</td>
                                <td style="text-align: center">{{$l->longe_od_dp}}</td>
                            </tr>
                            <tr>
                                <td height="34" style="text-align: center; font-weight: bold">O.E</td>
                                <td style="text-align: center">{{$l->longe_oe_esf}}</td>
                                <td style="text-align: center">{{$l->longe_oe_cil}}</td>
                                <td style="text-align: center">{{$l->longe_oe_eixo}}</td>
                                <td style="text-align: center">{{$l->longe_oe_dp}}</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="text-align: center; font-weight: bold">PERTO</td>
                                <td height="35" style="text-align: center; font-weight: bold">O.D</td>
                                <td style="text-align: center">{{$l->perto_od_esf}}</td>
                                <td style="text-align: center">{{$l->perto_od_cil}}</td>
                                <td style="text-align: center">{{$l->perto_od_eixo}}</td>
                                <td style="text-align: center">{{$l->perto_od_dp}}</td>
                            </tr>
                            <tr>
                                <td height="36" style="text-align: center; font-weight: bold">O.E</td>
                                <td style="text-align: center">{{$l->perto_oe_esf}}</td>
                                <td style="text-align: center">{{$l->perto_oe_cil}}</td>
                                <td style="text-align: center">{{$l->perto_oe_eixo}}</td>
                                <td style="text-align: center">{{$l->perto_oe_dp}}</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="text-align: center; font-weight: bold">ADIÇÃO</td>
                                <td height="30" style="text-align: center; font-weight: bold">O.D</td>
                                <td style="text-align: center">{{$l->adicao_od_esf}}</td>
                                <td style="text-align: center">{{$l->adicao_od_cil}}</td>
                                <td style="text-align: center">{{$l->adicao_od_eixo}}</td>
                                <td style="text-align: center">{{$l->adicao_od_dp}}</td>
                            </tr>
                            <tr>
                                <td height="39" style="text-align: center; font-weight: bold">O.E</td>
                                <td style="text-align: center">{{$l->adicao_oe_esf}}</td>
                                <td style="text-align: center">{{$l->adicao_oe_cil}}</td>
                                <td style="text-align: center">{{$l->adicao_oe_eixo}}</td>
                                <td style="text-align: center">{{$l->adicao_oe_dp}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>



    @endforeach

</div>
<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/checkbox-x.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/mascara-money.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bootstrap-datepicker/js/locales/bootstrap-datepicker.pt-BR.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('dataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('mask-money/src/jquery.maskMoney.js') }}"></script>
</body>
</html>


