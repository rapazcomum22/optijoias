<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armacao extends Model
{
    protected $table = 'armacao';
    public $timestamps = false;
    protected $guarded = array('_token');
}
