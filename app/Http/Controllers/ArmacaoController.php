<?php

namespace App\Http\Controllers;

use App\Armacao;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArmacaoController extends Controller
{

    public function index()
    {
        $query = Armacao::all();
        return view('armacao.index', ['model' => $query]);
    }

    public function create()
    {
        return view('armacao.create');
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Armação Registrada com sucesso';
        $u = new Armacao();
        $u->descricao_ar              = $request->get('descricao');
        $u->save();

        return redirect(route('armacao-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = Armacao::find($id);
        return view('armacao.edit', ['model' => $query]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Armação Editada com sucesso';
        $eUpdate = $request->all();
        $e = Armacao::find($id);
        $e->descricao_ar              = $eUpdate['descricao'];
        $e->save();

        return redirect(route('armacao-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
