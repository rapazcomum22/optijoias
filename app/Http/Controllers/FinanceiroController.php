<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FinanceiroController extends Controller
{
    public function indexGeral()
    {
        return view('financeiro.index');
    }
}
