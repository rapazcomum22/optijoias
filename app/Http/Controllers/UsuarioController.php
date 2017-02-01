<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function index()
    {
        $query = User::all();
        return view('usuario.index', ['model' => $query]);
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Usuário registrado com sucesso';
        $u = new User();
        $u->name        = $request->get('name');
        $u->email       = $request->get('usuario');
        $u->password    = bcrypt($request->get('password'));
        $u->cargo    = $request->get('cargo');
        $u->data_nascimento    = $request->get('data_nascimento');
        $u->data_admissao    = $request->get('data_admissao');
        $u->endereco    = $request->get('endereco');
        $u->status    = 'Ativo';
        $u->save();

        return redirect(route('usuario-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = User::find($id);
        return view('usuario.edit', ['model' => $query]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Usuário Editado com sucesso!';
        $eUpdate = $request->all();
        $e = User::find($id);
        $e->name        = $eUpdate['name'];
        $e->email       = $eUpdate['usuario'];
        $e->password    = bcrypt($eUpdate['password']);
        $e->cargo    = $eUpdate['cargo'];
        $e->data_nascimento    = $eUpdate['data_nascimento'];
        $e->data_admissao    = $eUpdate['data_admissao'];
        $e->endereco    = $eUpdate['endereco'];
        $e->status    = 'Ativo';
//        dd($e);
        $e->save();
        return redirect( route('usuario-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
    public function updateDesativa(Request $request, $id)
    {
        $mensagem = 'Usuário Desativado com sucesso!';
        $eUpdate = $request->all();
        $e = User::find($id);
        $e->name        = $eUpdate['name'];
        $e->email       = $eUpdate['usuario'];
        $e->cargo    = $eUpdate['cargo'];
        $e->data_nascimento    = $eUpdate['data_nascimento'];
        $e->data_admissao    = $eUpdate['data_admissao'];
        $e->endereco    = $eUpdate['endereco'];
        $e->password    = bcrypt('usuario_desativado');
        $e->status    = 'Inativo';
//        dd($e);
        $e->save();
        return redirect( route('usuario-index'))->with('alerta', ['type' => 'danger', 'msg' => $mensagem]);
    }
    public function updateAtiva(Request $request, $id)
    {
        $mensagem = 'Usuário Desativado com sucesso!';
        $eUpdate = $request->all();
        $e = User::find($id);
        $e->name        = $eUpdate['name'];
        $e->email       = $eUpdate['usuario'];
        $e->cargo    = $eUpdate['cargo'];
        $e->data_nascimento    = $eUpdate['data_nascimento'];
        $e->data_admissao    = $eUpdate['data_admissao'];
        $e->endereco    = $eUpdate['endereco'];
        $e->password    = bcrypt('usuario_desativado');
        $e->status    = 'Ativo';
//        dd($e);
        $e->save();
        return redirect( route('usuario-index'))->with('alerta', ['type' => 'danger', 'msg' => $mensagem]);
    }
}
