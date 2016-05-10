<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
     
     public $orders;

     // Injecting OrderRepository instance
    public function __construct(OrderRepository $orders){
    
        //Assingning OrderRepository Instance to variable task
         $this->orders = $orders;

    }


    /**
    Showing All orders
    */
    public function index(Request $request){
    	
        //Accessing all order method of order repository
        $orders = $this->orders->allOrder();

   			//Passing the order array to the view
    		return view('orders.index', compact('orders'));

     }


     public function show($id){
        
        $order = Order::with("order_products")->find($id);
       
       return view('orders.show', compact('order'));
    }
}
