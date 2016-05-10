<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Order;
use Auth;
use App\User;
use App\Cart;
use App\OrderProduct;


class OrderProductRepository {



    // Getting all the entities from orders table
	public function allOrderProducts(){
        
            $orderproducts = User::find(Auth::user()->id)->orderproducts;

            return $orderproducts;

    }

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
            $orderproduct->user_id = $product->user_id;
            $orderproduct->product_id = $product->product_id;
            $orderproduct->quantity = $product->quantity;
            $orderproduct->save();

        }

    }

    public function deleteCartProducts(){

       return Cart::where('user_id',Auth::user()->id )->delete();


    }

}