@extends('layouts.app')
@section('head')
    <style>
        .bs-glyphicons {
            margin: 0 -10px 20px;
            overflow: hidden
        }

        .bs-glyphicons-list {
            padding-left: 0;
            list-style: none
        }

        .bs-glyphicons li {
            float: left;
            width: 25%;
            height: 115px;
            padding: 10px;
            font-size: 10px;
            line-height: 1.4;
            text-align: center;
            background-color: #fff;
            border: 1px solid #fff
        }

        .bs-glyphicons .glyphicon {
            margin-top: 5px;
            margin-bottom: 10px;
            font-size: 24px
        }

        .bs-glyphicons .glyphicon-class {
            display: block;
            text-align: center;
            word-wrap: break-word
        }

        .bs-glyphicons li {
            color: #ff0000;
            background-color: #fff
        }

        .bs-glyphicons a {
            color: #ff0000;
            background-color: #fff
        }

        .bs-glyphicons li:hover {
            color: #fff;
            background-color: #ff0000;
        }

        .bs-glyphicons a:hover {
            color: #fff;
            background-color: #ff0000;
        }
        .font{
            font-size: 40px;
        }
        @media (min-width: 768px) {
            .bs-glyphicons {
                margin-right: 0;
                margin-left: 0
            }

            .bs-glyphicons li {
                width: 12.5%;
                font-size: 12px
            }
        }
        .wrapper h1{
            font:normal 45pt Arial;
            color:#FF0000;
            text-shadow: 0 1px 0 #ff1917,
            0 2px 0 #c9373a,
            0 3px 0 #bb4c4d,
            0 4px 0 #b95758,
            0 5px 0 #aa5858,
            0 6px 1px rgba(0,0,0,.1),
            0 0 5px rgba(0,0,0,.1),
            0 1px 3px rgba(0,0,0,.3),
            0 3px 5px rgba(0,0,0,.2),
            0 5px 10px rgba(0,0,0,.25),
            0 10px 10px rgba(0,0,0,.2),
            0 20px 20px rgba(0,0,0,.15);
        }

    </style>
@endsection
@section('content')
    @if(Auth::user()->email == 'admin' || Auth::user()->email == 'lais')
        <div class="row">
            <div class="col-md-12 ps-page-header" style="color: #ff0000;">
                <h1><i class="fa fa-money" id="fa" aria-hidden="true"></i> Painel de Controle Financeiro</h1>
            </div>
        </div>
        <div class="bs-glyphicons">
            <ul class="bs-glyphicons-list">
                @if(Auth::user()->cargo == 'Administrador')
                    <a href="{{route('usuario-index')}}">
                        <li>
                            <i class="font fa fa-user" aria-hidden="true"></i><br> Usuário/Funcionário
                        </li>
                    </a>
                    <a href="{{route('financeiro-index')}}">
                        <li>
                            <i class="font fa fa-money" aria-hidden="true"></i><br> Financeiro
                        </li>
                    </a>
                @endif
            </ul>
        </div>
    @else
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="wrapper">
                    <h1>Módulo Financeiro em Construção <br>
                    Aguarde Novidades!!!</h1>

                </div>
            </div>

        </div>
    @endif
@endsection