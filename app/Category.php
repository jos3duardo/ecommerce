<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function produtos(){
        return $this->hasMany('App\Product', 'category_id');
    }
}
