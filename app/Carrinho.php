<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    public function produtos(){

        return $this->belongsTo('App\Product','produto_id');
    }
}
