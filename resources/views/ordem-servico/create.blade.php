@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 ps-page-header" style="color: #ff0000;">
            <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Painel de Controle - Adicionar Ordem de Serviço</h1>
        </div>
    </div>
    <div class="well well-sm">
        <form action="{{route('ordem-servico-adiciona')}}"method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Cliente:</label>
                    <input type="hidden"  name="id_cliente" id="hiddenCliente">
                    <input class="form-control typeahead" autocomplete="off" id="dllCliente" placeholder="Pesquise por CPF ou pelo Nome do Cliente" required>
                    <div id="divClienteDel" class="input-group hidden">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-remove"
                                                                    aria-hidden="true"></span></button>
              </span>
                    </div>
                </div>
                <div class="col-md-2 form-group">
                    <label>Preço:</label>
                    <input type="text" id="money" class="form-control" name="preco" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
                <div class="col-md-2 form-group">
                    <label>Conta:</label>
                    <input type="text" id="money2" class="form-control" name="conta" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
                <div class="col-md-2 form-group">
                    <label>Saldo:</label>
                    <input type="text" id="money3" class="form-control" name="saldo" data-thousands="." data-decimal="," data-prefix="R$ " />
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 form-group">
                    <label>Doutor:</label>
                    <input type="text" class="form-control" name="optometrista"/>
                </div>
                <div class="col-md-4 form-group">
                    <label>Data:</label>
                    <input type="text" id="data1" class="form-control" name="data1"/>
                </div>
            </div>
           <div class="row">
               <div class="col-md-12">
                   <table class="table" width="100%" border="1">
                       <tbody>
                       <tr>
                           <td colspan="6" style="text-align: center">MEDIDAS PARA CONFECÇÃO DO OCULOS</td>
                       </tr>
                       <tr>
                           <td colspan="2"  style="text-align: center">OCULOS</td>
                           <td width="16%" style="text-align: center">ESFÉRICA</td>
                           <td width="16%" style="text-align: center">CILINDRICA</td>
                           <td width="16%" style="text-align: center">EIXO</td>
                           <td width="16%" style="text-align: center">DISTÂNCIA PUPILAR</td>
                       </tr>
                       <tr>
                           <td width="18%" rowspan="2">LONGE</td>
                           {{--<td width="10%">Olho Direito</td>--}}
                           <td width="10%">O.D</td>
                           <td><input type="text" class="form-control" name="longe_od_esf"> </td>
                           <td><input type="text" class="form-control" name="longe_od_cil">  </td>
                           <td><input type="text" class="form-control" name="longe_od_eixo">  </td>
                           <td><input type="text" class="form-control" name="longe_od_dp">  </td>
                       </tr>
                       <tr>
                           <td>O.E</td>
                           {{--<td>Olho Esquerdo</td>--}}
                           <td><input type="text" class="form-control" name="longe_oe_esf">  </td>
                           <td><input type="text" class="form-control" name="longe_oe_cil">  </td>
                           <td><input type="text" class="form-control" name="longe_oe_eixo">  </td>
                           <td><input type="text" class="form-control" name="longe_oe_dp">  </td>
                       </tr>
                       <tr>
                           <td rowspan="2">PERTO</td>
                           <td>O.D</td>
                           {{--<td>Olho Direito</td>--}}
                           <td><input type="text" class="form-control" name="perto_od_esf">  </td>
                           <td><input type="text" class="form-control" name="perto_od_cil">  </td>
                           <td><input type="text" class="form-control" name="perto_od_eixo">  </td>
                           <td><input type="text" class="form-control" name="perto_od_dp">  </td>
                       </tr>
                       <tr>
                           <td>O.E</td>
                           {{--<td>Olho Esquerdo</td>--}}
                           <td><input type="text" class="form-control" name="perto_oe_esf">  </td>
                           <td><input type="text" class="form-control" name="perto_oe_cil">  </td>
                           <td><input type="text" class="form-control" name="perto_oe_eixo">  </td>
                           <td><input type="text" class="form-control" name="perto_oe_dp">  </td>
                       </tr>
                       <tr>
                           <td rowspan="2">ADIÇÃO</td>
                           <td>O.D</td>
                           {{--<td>Olho Direito</td>--}}
                           <td><input type="text" class="form-control" name="adicao_od_esf">  </td>
                           <td><input type="text" class="form-control" name="adicao_od_cil">  </td>
                           <td><input type="text" class="form-control" name="adicao_od_eixo">  </td>
                           <td><input type="text" class="form-control" name="adicao_od_dp">  </td>
                       </tr>
                       <tr>
                           <td>O.E</td>
                           {{--<td>Olho Esquerdo</td>--}}
                           <td><input type="text" class="form-control" name="adicao_oe_esf">  </td>
                           <td><input type="text" class="form-control" name="adicao_oe_cil">  </td>
                           <td><input type="text" class="form-control" name="adicao_oe_eixo">  </td>
                           <td><input type="text" class="form-control" name="adicao_oe_dp">  </td>
                       </tr>
                       </tbody>
                   </table>
               </div>
           </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table" width="100%" border="1">
                        <tbody>
                        <tr>
                            <td width="20%" style="text-align: center">ARMAÇÃO</td>
                            <td width="30%" style="text-align: center">LENTE</td>
                            <td colspan="4" style="text-align: center">D.N.P</td>
                            <td width="10%" style="text-align: center">ALT.</td>
                        </tr>
                        <tr>
                            {{--<td><input type="text" class="form-control" name="armacao"> </td>--}}
                            <td>
                                <select name="id_armacao"  class="form-control">
                                    @foreach($armacao as $a)
                                        <option value="{{$a->id}}">{{$a->descricao}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="id_lentes"  class="form-control">
                                    @foreach($lentes as $l)
                                        <option value="{{$l->id}}">{{$l->id}} - {{$l->descricao}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td width="4%">D</td>
                            <td width="15%"><input type="text" class="form-control" name="dnp_d"> </td>
                            <td width="3%">E</td>
                            <td width="15%"><input type="text" class="form-control" name="dnp_e"> </td>
                            <td><input type="text" class="form-control" name="alt"> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Observações:</label>
                    <textarea class="form-control" rows="2" style="resize:none;" name="observacao"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Vendedor(a):</label>
                    <input type="hidden"  name="id_vendedor" id="hiddenFuncionario">
                    <input class="form-control typeahead" autocomplete="off" id="ddlFuncionario" placeholder="Pesquise pelo Código do Vendedor(a) ou pelo Nome" required>
                    <div id="divFuncionarioDel" class="input-group hidden">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-remove"
                                                                    aria-hidden="true"></span></button>
              </span>
                    </div>
                </div>
                <div class="col-md-offset-4 col-md-2 form-group">
                    <label>Pronto p/dia:</label>
                    <input type="text" id="data2" class="form-control" name="data_final">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-2">
                        <a href="{{route('ordem-servico-index')}}"class="btn btn-default">Cancelar</a>
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
    <script src="/public/js/bootstrap3-typeahead.min.js"></script>
    <script src="/public/js/moment-with-locales.min.js"></script>
    <script src="{{ asset('/js/bootstrap3-typeahead.min.js') }}"></script>
    <script src="{{ asset('/js/moment-with-locales.min.js') }}"></script>
    <script>
        $(function () {
//            TYPEAD CLIENTE
            $('.typeahead#dllCliente').typeahead({
                source: function (query, process) {
                    return $.getJSON('{{route('buscar-atletas')}}', function (data) {
                        result = [];
                        map = {};
                        $.each(data, function (key, value) {
                            map[value] = key;
                            result.push(value);
                        });
                        return process(result);
                    });
                },
                updater: function (item) {
                    $('#hiddenCliente').val(map[item]);
                    $("#divClienteDel").removeClass("hidden");
                    $("#dllCliente").prependTo("#divClienteDel");
                    $("#dllCliente").prop("disabled", true);
                    return item;
                }
            });
            $("#divClienteDel button").on("click", function () {
                $('#hiddenCliente').val('');
                $('#dllCliente').val('');
                $("#divClienteDel").addClass("hidden");
                $("#dllCliente").appendTo($("#divClienteDel").parent());
                $("#dllCliente").prop("disabled", false);
            });

//              TYPEHEAD FUNCIONARIO
            $('.typeahead#ddlFuncionario').typeahead({
                source: function (query, process) {
                    return $.getJSON('{{route('buscar-funcionario')}}', function (data) {
                        result = [];
                        map = {};
                        $.each(data, function (key, value) {
                            map[value] = key;
                            result.push(value);
                        });
                        return process(result);
                    });
                },
                updater: function (item) {
                    $('#hiddenFuncionario').val(map[item]);
                    $("#divFuncionarioDel").removeClass("hidden");
                    $("#ddlFuncionario").prependTo("#divFuncionarioDel");
                    $("#ddlFuncionario").prop("disabled", true);
                    return item;
                }
            });
            $("#divFuncionarioDel button").on("click", function () {
                $('#hiddenFuncionario').val('');
                $('#ddlFuncionario').val('');
                $("#divFuncionarioDel").addClass("hidden");
                $("#ddlFuncionario").appendTo($("#divFuncionarioDel").parent());
                $("#ddlFuncionario").prop("disabled", false);
            });

        });
        $('#data1, #data2').mask('99/99/9999');
        $('#rg').mask('99999999');
//        $('#dllCliente').mask('99999999999');
        $('#tel1, #tel2').mask('(99) 9999-9999');
        $("#money, #money2, #money3").maskMoney();
    </script>
@endsection