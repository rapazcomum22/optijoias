<?php

namespace App\Http\Controllers;

use App\Armacao;
use App\Cliente;
use App\Lentes;
use App\OrdemServico;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class OrdemServicoController extends Controller
{

    public function getClienteJSON()
    {
        return Cliente::getCliente()->pluck('cpfNome','id');
    }

    public function getFuncionarioJSON()
    {
        return User::getFuncionario()->pluck('idName','id');
    }
    public function index()
    {
        $query = OrdemServico::OrdemServico();
//        dd($query);
        return view('ordem-servico.index', ['model' => $query]);
    }

    public function create()
    {
        $armacao = Armacao::all();
        $lente = Lentes::all();
        return view('ordem-servico.create', ['armacao' =>$armacao, 'lentes' =>$lente]);
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Ordem de Serviço Registrada com sucesso';
        $u = new OrdemServico();
        $u->id_cliente              = $request->get('id_cliente');
        $u->id_funcionario          = $request->get('id_vendedor');
        $u->id_armacao              = $request->get('id_armacao');
        $u->id_lentes               = $request->get('id_lentes');
        $u->preco                   = $request->get('preco');
        $u->conta                   = $request->get('conta');
        $u->saldo                   = $request->get('saldo');
        $u->optometrista            = $request->get('optometrista');
        $u->data1                   = $request->get('data1');
//        LONGE OLHO DIREITO
        $u->longe_od_esf            = $request->get('longe_od_esf');
        $u->longe_od_cil            = $request->get('longe_od_cil');
        $u->longe_od_eixo           = $request->get('longe_od_eixo');
        $u->longe_od_dp             = $request->get('longe_od_dp');
//        LONGE OLHO ESQUERDO
        $u->longe_oe_esf            = $request->get('longe_oe_esf');
        $u->longe_oe_cil            = $request->get('longe_oe_cil');
        $u->longe_oe_eixo           = $request->get('longe_oe_eixo');
        $u->longe_oe_dp             = $request->get('longe_oe_dp');
//        PERTO OLHO DIREITO
        $u->perto_od_esf            = $request->get('perto_od_esf');
        $u->perto_od_cil            = $request->get('perto_od_cil');
        $u->perto_od_eixo           = $request->get('perto_od_eixo');
        $u->perto_od_dp             = $request->get('perto_od_dp');
//        PERTO OLHO ESQUERDO
        $u->perto_oe_esf            = $request->get('perto_oe_esf');
        $u->perto_oe_cil            = $request->get('perto_oe_cil');
        $u->perto_oe_eixo           = $request->get('perto_oe_eixo');
        $u->perto_oe_dp             = $request->get('perto_oe_dp');
//        ADIÇÃO OLHO DIREITO
        $u->adicao_od_esf           = $request->get('adicao_od_esf');
        $u->adicao_od_cil           = $request->get('adicao_od_cil');
        $u->adicao_od_eixo          = $request->get('adicao_od_eixo');
        $u->adicao_od_dp            = $request->get('adicao_od_dp');
//        ADIÇÃO OLHO ESQUERDO
        $u->adicao_oe_esf           = $request->get('adicao_oe_esf');
        $u->adicao_oe_cil           = $request->get('adicao_oe_cil');
        $u->adicao_oe_eixo          = $request->get('adicao_oe_eixo');
        $u->adicao_oe_dp            = $request->get('adicao_oe_dp');
        
        $u->dnp_d                   = $request->get('dnp_d');
        $u->dnp_e                   = $request->get('dnp_e');
        $u->alt                     = $request->get('alt');
        $u->observacao              = $request->get('observacao');
        $u->data_final              = $request->get('data_final');
//        dd($request);

        $u->save();

        return redirect(route('ordem-servico-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = OrdemServico::find($id);
        $armacao = Armacao::all();
        $lente = Lentes::all();
        return view('ordem-servico.edit', ['model' => $query, 'armacao' =>$armacao, 'lentes' =>$lente]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Ordem de Serviço Editada com sucesso';
        $eUpdate = $request->all();
        $e = OrdemServico::find($id);
        $e->id_cliente              = $eUpdate['id_cliente'];
        $e->id_funcionario          = $eUpdate['id_vendedor'];
        $e->id_armacao              = $eUpdate['id_armacao'];
        $e->id_lentes               = $eUpdate['id_lentes'];
        $e->preco                   = $eUpdate['preco'];
        $e->conta                   = $eUpdate['conta'];
        $e->saldo                   = $eUpdate['saldo'];
        $e->optometrista            = $eUpdate['optometrista'];
        $e->data1                   = $eUpdate['data1'];
//        LONGE OLHO DIREITO
        $e->longe_od_esf            = $eUpdate['longe_od_esf'];
        $e->longe_od_cil            = $eUpdate['longe_od_cil'];
        $e->longe_od_eixo           = $eUpdate['longe_od_eixo'];
        $e->longe_od_dp             = $eUpdate['longe_od_dp'];
//        LONGE OLHO ESQUERDO
        $e->longe_oe_esf            = $eUpdate['longe_oe_esf'];
        $e->longe_oe_cil            = $eUpdate['longe_oe_cil'];
        $e->longe_oe_eixo           = $eUpdate['longe_oe_eixo'];
        $e->longe_oe_dp             = $eUpdate['longe_oe_dp'];
//        PERTO OLHO DIREITO
        $e->perto_od_esf            = $eUpdate['perto_od_esf'];
        $e->perto_od_cil            = $eUpdate['perto_od_cil'];
        $e->perto_od_eixo           = $eUpdate['perto_od_eixo'];
        $e->perto_od_dp             = $eUpdate['perto_od_dp'];
//        PERTO OLHO ESQUERDO
        $e->perto_oe_esf            = $eUpdate['perto_oe_esf'];
        $e->perto_oe_cil            = $eUpdate['perto_oe_cil'];
        $e->perto_oe_eixo           = $eUpdate['perto_oe_eixo'];
        $e->perto_oe_dp             = $eUpdate['perto_oe_dp'];
//        ADIÇÃO OLHO DIREITO
        $e->adicao_od_esf           = $eUpdate['adicao_od_esf'];
        $e->adicao_od_cil           = $eUpdate['adicao_od_cil'];
        $e->adicao_od_eixo          = $eUpdate['adicao_od_eixo'];
        $e->adicao_od_dp            = $eUpdate['adicao_od_dp'];
//        ADIÇÃO OLHO ESQUERDO
        $e->adicao_oe_esf           = $eUpdate['adicao_oe_esf'];
        $e->adicao_oe_cil           = $eUpdate['adicao_oe_cil'];
        $e->adicao_oe_eixo          = $eUpdate['adicao_oe_eixo'];
        $e->adicao_oe_dp            = $eUpdate['adicao_oe_dp'];

        $e->dnp_d                   = $eUpdate['dnp_d'];
        $e->dnp_e                   = $eUpdate['dnp_e'];
        $e->alt                     = $eUpdate['alt'];
        $e->observacao              = $eUpdate['observacao'];
        $e->data_final              = $eUpdate['data_final'];
//        dd($request);

        $e->save();

        return redirect(route('ordem-servico-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function show($id)
    {
        $query = OrdemServico::find($id);

        return view('ordem-servico.show', ['model' => $query]);

    }


    public function destroy($id)
    {
        $mensagem = 'Ordem de Serviço excluida com sucesso';
        OrdemServico::destroy($id);
        return redirect(route('ordem-servico-index'))->with('alerta', ['type' => 'danger', 'msg' => $mensagem]);

    }
}
