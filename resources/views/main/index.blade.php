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
.fa{
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

    </style>
@endsection
@section('content')
    <div class="ps-page-header" style="color: #ff0000;">
        <h4><span class="glyphicon glyphicon-dashboard"  aria-hidden="true"></span>Painel de Controle</h4>
    </div>
    <div class="bs-glyphicons">
        <ul class="bs-glyphicons-list">
            @if(Auth::user()->cargo == 'Administrador')
                <a href="{{route('usuario-index')}}">
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i><br> Usuário/Funcionário
                    </li>
                </a>
                <a href="{{route('financeiro-index')}}">
                    <li>
                        <i class="fa fa-money" aria-hidden="true"></i><br> Financeiro
                    </li>
                </a>
            @endif

            <a href="{{route('cliente-index')}}">
                <li>
                    <i class="fa fa-address-card" aria-hidden="true"></i><br> Cliente
                </li>
            </a>
            <a href="{{route('ordem-servico-index')}}">
                <li>
                    <i class="fa fa-building-o" aria-hidden="true"></i><br> Ordem de Serviço
                </li>
            </a>
            <a href="{{route('armacao-index')}}">
                <li>
                    <i class="fa fa-eercast" aria-hidden="true"></i><br> Armação
                </li>
            </a>
            <a href="{{route('lentes-index')}}">
                <li>
                    <i class="fa fa-eye" aria-hidden="true"></i><br> Lentes
                </li>
            </a>
            <a href="{{route('check-list-index')}}">
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i><br> Check List
                </li>
            </a>

        </ul>
    </div>
    <div class="ps-page-header" style="color: #ff0000;">
        <h4><span class="glyphicon glyphicon-list"  aria-hidden="true"></span>Relatórios</h4>
    </div>
    <div class="bs-glyphicons">
        <ul class="bs-glyphicons-list">
            <a href="{{route('relatorio-geral-index')}}">
                <li>
                    <i class="fa fa-window-maximize" aria-hidden="true"></i><br> Geral
                </li>
            </a>
            <a href="{{route('relatorio-cliente-index')}}">
                <li>
                    <i class="fa fa-id-badge" aria-hidden="true"></i><br> Clientes
                </li>
            </a>
            <a href="{{route('relatorio-vendedor-index')}}">
                <li>
                    <i class="fa fa-wpforms" aria-hidden="true"></i><br> Vendedor(a)
                </li>
            </a>
        </ul>
    </div>


@endsection