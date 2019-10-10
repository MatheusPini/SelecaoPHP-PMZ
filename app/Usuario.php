<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    function aparelhos(){
        return $this->belongsToMany('App\Aparelho', "usuario_aparelhos");
    }
}
