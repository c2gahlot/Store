<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OrderProductRepository;

use App\Http\Requests;
use App\Order;

class OrderProductController extends Controller
{
    
    public $orderproducts;

    public function __construct(OrderProductRepository $orderproducts)
    {

        $this->orderproducts = $orderproducts;
    }


   	public function store(Request $request)
    {
    	$order =  $this->orderproducts->store($request);
    	return redirect ('/order/'.$order->id);
    }  

}