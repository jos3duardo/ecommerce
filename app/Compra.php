<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function pessoa(){
        return $this->belongsTo('App\Pessoa');
        
    }
}
