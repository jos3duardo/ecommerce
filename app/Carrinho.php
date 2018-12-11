<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    public function produtos(){

        return $this->belongsTo('App\Product','produto_id');
    }
    public function usuario(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function pessoa(){
        return $this->belongsTo('App\Pessoa', 'pessoa_id');
    }
    public function produtosCarrinho(){
        return $this->belongsTo('App\ProdutosCarrinho', 'produto_id');
    }
}
