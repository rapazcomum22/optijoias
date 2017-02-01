<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClienteController extends Controller
{
    public function index()
    {
        $query = Cliente::all();
        return view('cliente.index', ['model' => $query]);
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Cliente registrado com sucesso';
        $u = new Cliente();
        $u->nome            = $request->get('nome');
        $u->data_nascimento = $request->get('data_nascimento');
        $u->endereco_cli    = $request->get('endereco');
        $u->rg              = $request->get('rg');
        $u->cpf             = $request->get('cpf');
        $u->profissao       = $request->get('profissao');
        $u->renda           = $request->get('renda');
        $u->telefone        = $request->get('telefone');
        $u->status          = 'Ativo';
        if($request->get('referencia1') != null){
            $u->referencia1     = $request->get('referencia1');
        }
        if($request->get('tel_referencia1') != null){
            $u->tel_referencia1 = $request->get('tel_referencia1');
        }
        if($request->get('referencia2') != null){
            $u->referencia2     = $request->get('referencia2');
        }
        if($request->get('tel_referencia2') != null){
            $u->tel_referencia2 = $request->get('tel_referencia2');
        }
        $u->save();

        return redirect(route('cliente-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = Cliente::find($id);
        return view('cliente.edit', ['model' => $query]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Cliente Editado com sucesso!';
        $eUpdate = $request->all();
        $e = Cliente::find($id);
        $e->nome            = $eUpdate['nome'];
        $e->data_nascimento = $eUpdate['data_nascimento'];
        $e->endereco_cli    = $eUpdate['endereco'];
        $e->rg              = $eUpdate['rg'];
        $e->cpf             = $eUpdate['cpf'];
        $e->profissao       = $eUpdate['profissao'];
        $e->renda           = $eUpdate['renda'];
        $e->telefone        = $eUpdate['telefone'];
        if($eUpdate['referencia1'] != null){
            $e->referencia1     = $eUpdate['referencia1'];
        }
        if($eUpdate['tel_referencia1'] != null){
            $e->tel_referencia1 = $eUpdate['tel_referencia1'];
        }
        if($eUpdate['referencia2'] != null){
            $e->referencia2     = $eUpdate['referencia2'];
        }
        if($eUpdate['tel_referencia2'] != null){
            $e->tel_referencia2 = $eUpdate['tel_referencia2'];
        }

        $e->save();
        return redirect( route('cliente-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
