<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGOS - Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="/public/favicon.ico">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->

    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">

    <style>
        html {
            background: rgb(255, 0, 0);
            background: -moz-linear-gradient(left, rgb(255, 0, 0) 0%, rgb(255, 62, 65) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgb(255, 0, 0)), color-stop(100%, rgb(255, 62, 65)));
            background: -webkit-linear-gradient(left, rgb(255, 0, 0) 0%, rgb(255, 62, 65) 100%);
            background: -o-linear-gradient(left, rgb(255, 0, 0) 0%, rgb(255, 62, 65) 100%);
            background: -ms-linear-gradient(left, rgb(255, 0, 0) 0%, rgb(255, 62, 65) 100%);
            background: linear-gradient(to right, rgb(255, 0, 0) 0%, rgb(255, 62, 65) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#207ce5', endColorstr='#499bea', GradientType=1 );
        }
        body {
            font-family: 'Lato';
        }
        .painel-cima {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .painel-baixo {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        /*.padding-config {*/
            /*padding: 30px 0;*/
        /*}*/
        .col-md-4 {
            background-color: #fff;
        }
        .fundo {
            content: "";
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            background: transparent\9;
            zoom: 1;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#77FFFFFF, endColorstr=#77FFFFFF);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#77FFFFFF, endColorstr=#77FFFFFF)";
            -webkit-background-size: cover !important;
            -moz-background-size: cover !important;
            -o-background-size: cover !important;
            background-size: cover !important;
            background-position: center center !important;
            background-attachment: fixed !important;
            opacity: 1.0;
        }
    </style>
</head>
<body id="app-layout" class="bg-image">
    <div class="col-md-11 text-right">
    </div>
<div class="fundo">
    <div class="container" style="padding-top: 15%;padding-bottom: 5%">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10 text-center painel-cima">
                <img src="/public/images/logo-principal.PNG" width="100%" alt="" class="padding-config">
                {{--<img src="{{asset('images/logo-principal.png')}}" width="100%" alt="" class="padding-config">--}}
            </div>
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10">
                    <div class="">
                        <label>Usuário:</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="">
                        <label>Senha:</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group" style="padding: 15px;">
                        <button id="acessar-btn" type="submit" class="btn btn-danger btn-lg btn-block">
                            <i class="fa fa-btn fa-sign-in"></i>  Acessar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>





