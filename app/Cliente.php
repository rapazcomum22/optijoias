<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    public $timestamps = false;
    protected $guarded = array('_token');

    public static function getCliente()
    {
        $query = Cliente::all();
        $query->transform(function($item){
            $obj = new User();
            $obj->id = $item["id"];
            $obj->nome = $item["nome"];
            $obj->cpf = $item["cpf"];
            $obj->cpfNome = $item["cpf"]." - ".$item["nome"];
            return $obj;
        });
        return $query->sortBy('nome');
    }

    
}
