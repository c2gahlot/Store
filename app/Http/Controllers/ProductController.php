<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{

	public $products;


	public function __construct(ProductRepository $products){

		$this->products = $products;

	}

	public function create(){

		return view('products.create');

	}
    
    public function store(Request $request){

    	$product =  $this->products->store($request);
    	return redirect ('/home');
    }



    public function show($id){
    	
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    
    }

}
