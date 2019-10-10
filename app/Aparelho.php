<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aparelho extends Model
{
    protected $table = 'aparelhos';
    function usuarios(){
        return $this->belongsToMany('App\Usuario', "usuario_aparelhos");
 
    }
}
