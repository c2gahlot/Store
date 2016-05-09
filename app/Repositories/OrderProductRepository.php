<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Order;
use Auth;
use App\User;
use App\Cart;


class OrderProductRepository {


    // Getting all the entities from orders table
	  public function allOrder(){
        
            $orderproducts = User::find(Auth::user()->id)->orderproducts;

            return $orderproducts;

    }

    // migrating all order rows to the oder table
    // fetching all rows in a array from order table
    // assigning the value to alternative entities
	 public function store(Request $request){

        $order = $this->createNewOrder();

	 	$products = $this->getCartProducts();

        $this->moveProductsFromCartToOrder($products, $order );

        $this->deleteCartProducts();

    	
    	return $order;
    }


    public function createNewOrder()
    {
       
       $order = new Order; 
       $order->user_id = Auth::user()->id;
       $order->save();

       return $order;

    }

    public function getCartProducts()
    {
        return User::find(Auth::user()->id)->carts;
    }

public function moveProductsFromCartToOrder($products, $order)
{
        foreach ($products as $product) {
        

            $orderproduct = new OrderProduct;
            
            $orderproduct->order_id = $order->id;
            $orderproduct->user_id = $cart->user_id;
            $orderproduct->product_id = $cart->product_id;
            $orderproduct->quantity = $cart->quantity;
            $orderproduct->save();

        }

    }

    public function deleteCartProducts(){

        return App\Cart::where('user_id',Auth::user()->id )->delete();



    }

}