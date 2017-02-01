<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>S.G.S.O - ORDEM DE SERVIÇO </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
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
    <div style="padding-top: 20px;">
        <div class="well well-sm">
            <div class="row">
                <div class="col-md-12">
                    PARTE DO CLIENTE
                    <table width="100%">
                        <tbody>
                        <tr>
                            <td colspan="6" rowspan="2" style="font-size: 30px;">ÓPTICA OPTIJÓIAS</td>
                            <td width="7%"> </td>
                            <td width="14%"> </td>
                            <td width="25%"> </td>
                            <td width="1%"> </td>
                            <td width="8%"> </td>
                            <td width="15%"><div style="text-align: center;font-weight: bold">ORDEM DE SERVIÇO</div></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td style="text-align: center"><input type="text" disabled value="{{$model->id_os}}" class="form-control"></td>
                        </tr>
                        <tr>
                            <td colspan="2"> </td>
                            <td width="2%"> </td>
                            <td width="16%"> </td>
                            <td width="3%"> </td>
                            <td width="1%"> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td style="text-align: center; font-weight: bold">fone: (69) 3541-1460</td>
                        </tr>
                        <tr>
                            <td colspan="2"> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td style="font-weight: bold;">VENDEDOR:</td>
                            <td>{{$model->Funcionario->id}} - {{$model->Funcionario->name}}</td>
                        </tr>
                        <tr>
                            <td colspan="12"  style="text-align: center; font-weight: bold">AV. LEOPOLDO DE MATOS, 242 LOJA A - CENTRO - CEP 76850-000 - GUAJARÁ-MIRIM - RO</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="font-weight: bold;">PREÇO TOTAL:</td>
                            <td colspan="2">{{$model->preco}}</td>
                            <td> </td>
                            <td style="font-weight: bold;">A CONTA:</td>
                            <td>{{$model->conta}}</td>
                            <td> </td>
                            <td> </td>
                            <td style="font-weight: bold;">SALDO:</td>
                            <td>{{$model->saldo}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-weight: bold;">NOME:</td>
                            <td colspan="10">{{$model->Cliente->nome}}</td>
                        </tr>
                        <tr>
                            <td width="3%" style="font-weight: bold;">DR:</td>
                            <td colspan="5">{{$model->optometrista}}</td>
                            <td> </td>
                            <td colspan="3"> </td>
                            <td style="font-weight: bold;">DATA:</td>
                            <td>{{$model->data1}}</td>
                        </tr>
                        <tr>
                            <td colspan="12" style="font-weight: bold; text-align: center;">EMPRESA FILIADA AO CONSELHO DE ÓPTICA E OPTOMETRIA - CROO - RO</td>
                        </tr>
                        </tbody>
                    </table>
                    FIM PARTE DO CLIENTE
                </div>
            </div>
        </div>
    </div>
    <hr>
        <div class="well well-sm">
            <div class="row">
                <div class="col-md-12">
                    <table width="100%">
                        <tbody>
                        <tr>
                            <td width="7%"  style="font-weight: bold">Nome:</td>
                            <td colspan="3">{{$model->Cliente->nome}}</td>
                        </tr>
                        <tr>
                            <td   style="font-weight: bold">Endereço:</td>
                            <td width="73%">{{$model->Cliente->endereco}}</td>
                            <td width="7%" colspan="-5"  style="font-weight: bold">Telefone:</td>
                            <td width="13%" colspan="-5">{{$model->Cliente->telefone}}</td>
                        </tr>
                        <tr>
                            <td  style="font-weight: bold">Doutor:</td>
                            <td>{{$model->optometrista}}</td>
                            <td colspan="-5"  style="font-weight: bold">Data:</td>
                            <td colspan="-5">{{$model->data1}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                <td style="text-align: center">{{$model->longe_od_esf}}</td>
                <td style="text-align: center">{{$model->longe_od_cil}}</td>
                <td style="text-align: center">{{$model->longe_od_eixo}}</td>
                <td style="text-align: center">{{$model->longe_od_dp}}</td>
            </tr>
            <tr>
                <td height="34" style="text-align: center; font-weight: bold">O.E</td>
                <td style="text-align: center">{{$model->longe_oe_esf}}</td>
                <td style="text-align: center">{{$model->longe_oe_cil}}</td>
                <td style="text-align: center">{{$model->longe_oe_eixo}}</td>
                <td style="text-align: center">{{$model->longe_oe_dp}}</td>
            </tr>
            <tr>
                <td rowspan="2" style="text-align: center; font-weight: bold">PERTO</td>
                <td height="35" style="text-align: center; font-weight: bold">O.D</td>
                <td style="text-align: center">{{$model->perto_od_esf}}</td>
                <td style="text-align: center">{{$model->perto_od_cil}}</td>
                <td style="text-align: center">{{$model->perto_od_eixo}}</td>
                <td style="text-align: center">{{$model->perto_od_dp}}</td>
            </tr>
            <tr>
                <td height="36" style="text-align: center; font-weight: bold">O.E</td>
                <td style="text-align: center">{{$model->perto_oe_esf}}</td>
                <td style="text-align: center">{{$model->perto_oe_cil}}</td>
                <td style="text-align: center">{{$model->perto_oe_eixo}}</td>
                <td style="text-align: center">{{$model->perto_oe_dp}}</td>
            </tr>
            <tr>
                <td rowspan="2" style="text-align: center; font-weight: bold">ADIÇÃO</td>
                <td height="30" style="text-align: center; font-weight: bold">O.D</td>
                <td style="text-align: center">{{$model->adicao_od_esf}}</td>
                <td style="text-align: center">{{$model->adicao_od_cil}}</td>
                <td style="text-align: center">{{$model->adicao_od_eixo}}</td>
                <td style="text-align: center">{{$model->adicao_od_dp}}</td>
            </tr>
            <tr>
                <td height="39" style="text-align: center; font-weight: bold">O.E</td>
                <td style="text-align: center">{{$model->adicao_oe_esf}}</td>
                <td style="text-align: center">{{$model->adicao_oe_cil}}</td>
                <td style="text-align: center">{{$model->adicao_oe_eixo}}</td>
                <td style="text-align: center">{{$model->adicao_oe_dp}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div style="padding-top: 20px;">
        <table width="100%" border="1">
            <tbody>
            <tr>
                <td style="text-align: center; font-weight: bold">ARMAÇÃO</td>
                <td colspan="4" style="text-align: center; font-weight: bold">D.N.P</td>
                <td style="text-align: center; font-weight: bold">ALT.</td>
            </tr>
            <tr>
                <td width="25%" style="text-align: center">{{$model->Armacao->descricao}}</td>
                <td width="2%" style="text-align: center">D</td>
                <td width="23%" style="text-align: center">{{$model->dnp_d}}</td>
                <td width="2%" style="text-align: center">E</td>
                <td width="23%" style="text-align: center">{{$model->dnp_e}}</td>
                <td width="25%" style="text-align: center">{{$model->alt}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row"  style="padding-top: 20px;">
        <div class="col-md-12">
            <strong>OBS:</strong> {{$model->observacao}}
        </div>
    </div>
    <div class="row"  style="padding-top: 20px;">
        <div class="col-xs-4">
            <div class="well well-sm">
                <label>PREÇO TOTAL:</label><br>
                {{$model->preco}}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="well well-sm">
                <label>P/CONTA:</label><br>
                {{$model->conta}}
            </div>
        </div>
        <div class="col-xs-4">
            <div class="well well-sm">
                <label>SALDO:</label><br>
                {{$model->saldo}}
            </div>
        </div>
    </div>
    <div class="row"  style="padding-top: 20px;">
        <div class="col-xs-6"><strong>Data:</strong> {{$model->data1}}</div>
        <div class="col-xs-6"><strong>Pronto p/dia:</strong> {{$model->data_final}}</div>
    </div>
    <div class="row"  style="padding-top: 20px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-6" style="text-align: center"><strong> VENDEDOR(A):</strong> {{$model->Funcionario->id}} - {{$model->Funcionario->name}}</div>
        <div class="col-xs-3"></div>
    </div>
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


