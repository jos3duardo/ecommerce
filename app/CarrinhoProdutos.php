<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarrinhoProdutos extends Model
{
    public function produtos(){
        return $this->belongsTo('App\Product','produto_id');
    }
}
