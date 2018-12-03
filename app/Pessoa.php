<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    
    public function profissao(){
        return $this->belongsTo('App\Profession');
    }
    
}
