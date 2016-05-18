<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Product;
use Auth;
use App\User;


class ProductRepository {


    // Getting all the entities from products table
	  public function allProduct(){
        
            $products = Products::get();

            return $products;

    }

    // Storing new row to the cart table
	 public function store(Request $request){

    	$product = new Product;

    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->stock = $request->stock;
        $product->price = $request->price;
    	$product->save();

    	return $product;
    }

}