<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Scopes\StockScope;

class Product extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StockScope);
    }

    public function reviews(){

    		return $this->hasMany('App\Review');

    }
}
