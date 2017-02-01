<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class SystemController extends Controller
{
    public function index()
    {
        $query  = User::all();
        return view('main.index',['model' => $query]);

    }
}
