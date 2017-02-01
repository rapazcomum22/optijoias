<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getFuncionario()
    {
        $query = User::all();
        $query->transform(function($item){
            $obj = new User();
            $obj->id = $item["id"];
            $obj->nome = $item["name"];
            $obj->idName = $item["id"]." - ".$item["name"];
            return $obj;
        });
        return $query->sortBy('nome');
    }
}
