<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function show($id){
    	
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    
    }
}
