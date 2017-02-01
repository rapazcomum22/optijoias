<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    protected $table = 'ordem_servico';
    protected $primaryKey = 'id_os';
    public $timestamps = false;
    protected $guarded = array('_token');

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function Funcionario()
    {
        return $this->belongsTo(User::class, 'id_funcionario', 'id');
    }
    public function Lentes()
    {
        return $this->belongsTo(Lentes::class, 'id_lentes', 'id');
    }
    public function Armacao()
    {
        return $this->belongsTo(Armacao::class, 'id_armacao', 'id');
    }

    public static function dropOrdem($id)
    {
        static::where('id', $id)->delete();
    }

    public static function filtroOrdemGeral ($data_inicio, $data_final)
    {
        return (\DB::table('ordem_servico AS o')
            ->join('cliente AS c', 'o.id_cliente', '=', 'c.id')
            ->join('armacao AS A', 'o.id_armacao', '=', 'a.id')
            ->join('lentes AS l', 'o.id_lentes', '=', 'l.id')
            ->join('users AS u', 'o.id_funcionario', '=', 'u.id')
            ->select('*')
            ->whereBetween('o.data1', [$data_inicio, $data_final])
            ->get()
        );
    }
    
    
    public static function OrdemServico()
    {
        return \DB::table('cliente AS c')
            ->join('ordem_servico AS o', 'c.id', '=', 'o.id_cliente')
            ->select('*')
            ->orderBy('o.id_os','desc')
            ->get();

    }
}
