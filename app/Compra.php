<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function pessoa(){
        return $this->belongsTo('App\Pessoa');
        
    }

    public function pedido_produtos(){
        return $this->hasMany('App\CompraProduto')
        ->select(\DB::raw('produto_id, sum(valor) as valor'))
        ->groupBy('produto_id') 
        ->orderBy('produto_id', 'desc');
    }
}
