<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderProductController extends Controller
{
    
    public $orderproducts;

    public function index(){

    		$orderproducts = $this->orderproducts->allOrderProducts();
    		return view('orderproducts.index', compact('orderproducts'));

    }


   	public function store(Request $request){

    	$order =  $this->orderproducts->store($request);

    	return redirect ('/order/'.$order->id);
    }


    public function show($id){
        
        $order = Order::find($id);
        return view('order.show', compact('order'));


}
