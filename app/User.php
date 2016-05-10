<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function carts(){

        return $this->hasMany('App\Cart');

   }

   public function products(){

        return $this->hasMany('App\Product');

    }

    public function reviews(){

        return $this->hasMany('App\Review');

    }

    public function products(){

        return $this->hasMany('App\Order');

    }

}
