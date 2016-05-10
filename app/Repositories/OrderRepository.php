<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Order;
use Auth;
use App\User;
use App\Cart;
use App\OrderProduct;


class OrderRepository {

	protected $orders;

    // Getting all the entities from orders table
	public function allOrder(){
        
			$orders = User::find(Auth::user()->id)->orders;

			//$orders = Order::with("order_products")->get();

            return $orders;

    }

}