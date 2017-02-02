<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title class="hidden-print">S.G.S.O - Inicio</title>

    <!-- Fonts -->
    {{--<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">
    <!-- Styles Para o servidor reconhecer -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/simple-sidebar.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public//bootstrap-datepicker/dist/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="/public/dataTables/media/css/dataTables.bootstrap.min.css"/>
    <!-- Styles Para o servidor reconhecer -->
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
    @yield('head')
</head>
<body id="app-layout">
@if(Auth::user()->status == 'Inativo')
    <div class="col-md-12 text-center">
        <div class="alert alert-danger alert-dismissible" role="alert">
            ERRO 501<strong> ACESSO NEGADO!</strong>
        </div>
    </div>
    <div class="container">
        <img src="{{asset('images/surpri.png')}}" width="100%" alt="" class="padding-config">
    </div>
@else
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
    <div class="container">
        <div class="row hidden-print">
            <div class="col-md-12 text-center">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>SISTEMA EM DESENVOLVIMENTO! AGUARDE NOVIDADES!!</strong>
                </div>
            </div>
        </div>
        @if (session('alerta'))
            <div class="alert alert-{{ session('alerta')['type'] }}">
                {{ session('alerta')['msg'] }}
            </div>
        @endif
        @yield('content')
    </div>
    <div id="footer">
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
    @yield('script')
@endif
</body>
</html>
