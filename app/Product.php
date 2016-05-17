<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function scopeAvailable($query)
    {
        return $query->where('stock', '>', 0);
    }

    public function reviews(){

    		return $this->hasMany('App\Review');

    }
}
