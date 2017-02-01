<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lentes extends Model
{
    protected $table = 'lentes';
    public $timestamps = false;
    protected $guarded = array('_token');
}
