<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cart;
use Auth;
use App\Repositories\CartRepository;


class CartController extends Controller
{
    
	public $carts;

    //Injecting repository to the controller
    public function __construct(CartRepository $carts){
    
         $this->carts = $carts;

    }

    //Showing the list all the products in the cart using allcart funtion from repository
    public function index(Request $request){
    	
        $carts = $this->carts->allCart();

          
    	return view('carts.index', compact('carts'));
    }

    //Storing the new entry in the carts table using repository
    public function store(Request $request){

    	$cart =  $this->carts->store($request);
    	return redirect ('/cart');
    }


    public function destroy($id){

        Cart::destroy($id);
        return redirect ('/cart');        

    }

}
