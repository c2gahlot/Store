<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Order;
use Auth;
use App\User;
use App\Cart;
use App\OrderProduct;


class UserRepository {

	protected $users;

    // Getting all the entities from orders table
	public function allUser(){
        
			$users = User::with('orders.order_products.product')->find(Auth::user()->id);

            return $users;

    }

}