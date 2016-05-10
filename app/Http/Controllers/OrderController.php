<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;

class OrderController extends Controller
{
     public function show($id){
        
        //$order = Order::find($id);
        $order = Order::with("order_products")->find($id);
       
       return view('orders.show', compact('order'));
    }
}
