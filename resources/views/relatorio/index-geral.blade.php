<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title class="hidden-print">S.G.S.O - Relátorio Geral</title>

    <!-- Fonts -->
    {{--<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">
    <!-- Styles -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/simple-sidebar.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dataTables/media/css/dataTables.bootstrap.min.css')}}"/>

    <style>
        body {
            font-family: 'Lato';
        }
        #footer {
            position:fixed;
            left:0px;
            bottom:0px;
            height:50px;
            width:100%;
            background: #ff0000;
            border-top: 1px solid #e7e7e7;
            text-align: center;
            color: #FFFFFF;
            padding-top: 15px;
        }
        #footer a {
            color: #FFD700;
            text-decoration: line-through;
        }

        /* IE 6 */
        * html #footer {
            position:absolute;
            top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
        }
        .navbar-default {
            background-color: #ff0000;
            border-color: #e7e7e7;
        }
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
            color: red;
            background-color: #ffffff;
        }
        .navbar-default .navbar-brand {
            color: #ffffff;
        }
        .navbar-default .navbar-nav>li>a {
            color: #ffffff;
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
            color: #777;
            background-color: transparent;
        }
        .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
            color: #FFD700;
            background-color: transparent;
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
            color: #FFD700;
            background-color: transparent;
        }

    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Optica Optjoias
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            {{--<ul class="nav navbar-nav">--}}
            {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
            {{--</ul>--}}

                    <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Seja bem Vindo(a) {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container ">
    <div class="row hidden-print">
        <div class="col-md-12 text-center">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>SISTEMA EM DESENVOLVIMENTO! AGUARDE NOVIDADES!!</strong>
            </div>
        </div>
    </div>
    <div class="row hidden-print">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><i class="fa fa-window-maximize" aria-hidden="true"></i> Relátorio - Geral</h1>
        </div>
    </div>
    <form action="{{route('relatorio-geral-filtro')}}" class="hidden-print">
        <div class="row form-group" id="rangeData">
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group' id='divDataInicio'>
                        @if(isset($_GET['data_inicial']))
                        <input type='text' class="form-control datetime" name="data_inicial"
                               placeholder="Data Inicial" value="{{$_GET['data_inicial']}}" required/>
                        @else
                            <input type='text' class="form-control datetime" name="data_inicial"
                                   placeholder="Data Inicial" required/>
                        @endif
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <div class="form-group">
                    <div class='input-group date' id='divDataFinal'>
                        @if(isset($_GET['data_final']))
                            <input type='text' class="form-control datetime" name="data_final"
                                   placeholder="Data Final" value="{{$_GET['data_final']}}" required/>
                        @else
                            <input type='text' class="form-control datetime" name="data_final"
                                   placeholder="Data Final" required/>
                        @endif
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <button type="buscar" class="btn btn-danger">
                    <span class="glyphicon glyphicon-search"></span> Buscar
                </button>
            </div>
        </div>

    </form>
    @if(isset($ordem))
        {{--{{dd($ordem)}}--}}
        @if($ordem != null)
            <div class="row">
                <div class="col-md-12 text-right" style="padding-bottom: 10px">
                    <button type="buscar" class="btn btn-success hidden-print" id="imprimir">
                        <span class="glyphicon glyphicon-print"></span> Imprimir
                    </button>
                </div>
            </div>

        @endif
        @if(isset($_GET['data_inicial']) || isset($_GET['data_final']))
            <div class="well well-sm visible-print">
                <h3 style="text-align: center">OPTICA OPTIJOIAS</h3>
                <h4 style="text-align: center">RELATORIO GERAL DATA INICIAL: {{$_GET['data_inicial']}} E DATA FINAL: {{$_GET['data_final']}}</h4>
            </div>
        @endif

            @foreach($ordem as $o)
                {{--{{dd($o)}}--}}
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-xs-5"><strong>NOME:</strong><span style="text-transform: uppercase"> {{$o->nome}}</span></div>
                        <div class="col-xs-2"><strong>RG:</strong><span style="text-transform: uppercase"> {{$o->rg}}</span></div>
                        <div class="col-xs-2"><strong>CPF:</strong><span style="text-transform: uppercase"> {{$o->cpf}}</span></div>
                        <div class="col-xs-3"><strong>ORDEM DE SERVIÇO:</strong><span style="text-transform: uppercase"> {{$o->id_os}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <strong>ENDEREÇO:</strong><span style="text-transform: uppercase"> {{$o->endereco_cli}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4"><strong>DOUTOR:</strong><span style="text-transform: uppercase"> {{$o->optometrista}}</span></div>
                        <div class="col-xs-4"><strong>DATA DO PEDIDO:</strong><span style="text-transform: uppercase"> {{date('d/m/Y', strtotime($o->data1))}}</span></div>
                        <div class="col-xs-4"><strong>DATA DA ENTREGA:</strong><span style="text-transform: uppercase"> {{date('d/m/Y', strtotime($o->data_final))}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><strong>TIPO DE ARMAÇÃO: </strong> <span style="text-transform: uppercase">{{$o->descricao_ar}}</span></div>
                        <div class="col-xs-6"><strong>TIPO DE LENTE:</strong><span style="text-transform: uppercase"> {{$o->descricao}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4"><strong>PREÇO:</strong><span style="text-transform: uppercase"> {{$o->preco}}</span></div>
                        <div class="col-xs-4"><strong>A CONTA:</strong><span style="text-transform: uppercase"> {{$o->conta}}</span></div>
                        <div class="col-xs-4"><strong>SALDO:</strong><span style="text-transform: uppercase"> {{$o->saldo}}</span></div>
                    </div>

                </div>
            @endforeach
    @endif

</div>

<div class="hidden-print" id="footer">
    Todos Direitos Reservados Optica Optjóias &copy; {{date('Y')}} Sistema Desenvolvido por <a href="https://www.facebook.com/profile.php?id=100001955017402">Rodrigo Lopes</a>
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
<script src="{{ asset('/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('js/pt-br.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>

<script src="{{ asset('/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('js/pt-br.js') }}"></script>

<script src="{{ asset('/js/jquery.maskMoney.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>


{{--STYLE SERVIDOR--}}
<script type="text/javascript" src="/public/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/checkbox-x.min.js"></script>
<script type="text/javascript" src="/public/js/mask.js"></script>
<script type="text/javascript" src="/public/js/mascara-money.js"></script>
<script type="text/javascript" src="/public/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/bootstrap-datepicker/js/locales/bootstrap-datepicker.pt-BR.js"></script>
<script type="text/javascript" src="/public/js/script.js"></script>
<script type="text/javascript" src="/public/dataTables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/dataTables/media/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/public/mask-money/src/jquery.maskMoney.js"></script>
<script src="/public/js/bootstrap-datetimepicker.js"></script>
<script src="/public/js/pt-br.js"></script>
<script src="/public/js/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/moment-with-locales.min.js"></script>
<script src="/public/js/jquery.maskedinput.min.js"></script>

<script src="/public/js/bootstrap-datetimepicker.js"></script>
<script src="/public/js/pt-br.js"></script>

<script src="/public/js/jquery.maskMoney.js"></script>
<script src="/public/js/scripts.js"></script>
<script>
    $(function () {
        $('.datetime').datetimepicker({
            locale:'pt-br',
            format: 'DD/MM/YYYY'
        });
    });
    $('#imprimir').on('click', function () {
        window.print();
    });
</script>
</body>
</html>
