<?php

namespace App\Http\Controllers;

use App\Lentes;
use Illuminate\Http\Request;

use App\Http\Requests;

class LentesController extends Controller
{
    public function index()
    {
        $query = Lentes::all();
        return view('lentes.index', ['model' => $query]);
    }

    public function create()
    {
        return view('lentes.create');
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Lentes Registrada com sucesso';
        $u = new Lentes();
        $u->descricao              = $request->get('descricao');
        $u->save();

        return redirect(route('lentes-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = Lentes::find($id);
        return view('lentes.edit', ['model' => $query]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Lentes Editada com sucesso';
        $eUpdate = $request->all();
        $e = Lentes::find($id);
        $e->descricao              = $eUpdate['descricao'];
        $e->save();

        return redirect(route('lentes-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
