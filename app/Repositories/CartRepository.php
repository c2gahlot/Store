<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Cart;
use Auth;
use App\User;


class CartRepository {


    // Getting all the entities from carts table
	  public function allCart(){
        
            $carts = User::find(Auth::user()->id)->carts;

            return $carts;

    }

    // Storing new row to the cart table
	 public function store(Request $request){

    	$cart = new Cart;

    	$cart->user_id = Auth::user()->id;
    	$cart->product_id = $request->product_id;
    	$cart->quantity = $request->quantity;
    	$cart->save();

    	return $cart;
    }

}

