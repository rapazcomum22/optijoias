<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\OrdemServico;
use Illuminate\Http\Request;

use App\Http\Requests;

class RelatorioController extends Controller
{
    public function indexGeral()
    {
        return view('relatorio.index-geral');
    }

    public function relatorioGeral(Request $request)
    {
        $data_inicio = date('Y-m-d', strtotime(str_replace('/', '-', $request->get('data_inicial'))));
        $data_final  = date('Y-m-d', strtotime(str_replace('/', '-', $request->get('data_final'))));
        $ordemFiltro = OrdemServico::filtroOrdemGeral($data_inicio, $data_final);

        return view('relatorio.index-geral', [
            'ordem' => $ordemFiltro,
        ]);
    }

    public function showOrdemGeral($id)
    {
        $query = OrdemServico::find($id);

        return view('ordem-servico.show', ['model' => $query]);

    }

    public function indexCliente()
    {
        $query = Cliente::all();
        return view('relatorio.index-cliente', ['model' => $query]);
    }

    public function relatorioClienteShow($id)
    {
        $query = Cliente::find($id);
        $model = Cliente::find($id)->id;
        $listarOS = OrdemServico::where('id_cliente', $model)->orderBy('data1')->get();

        return view('relatorio.relatorio-cliente-show', ['model' => $model, 'listarOS' => $listarOS, 'query' => $query]);

    }
}
