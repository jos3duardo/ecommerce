<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function categoria(){
        return $this->hasMany('App\Product');
    }
    
}
