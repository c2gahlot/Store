<?php

namespace App\Repositories;

use App\Product;

class HomeRepository
{

    
    //Return a list of all products
    public function allProducts(){
        
            //Getting all Products
            $products = Product::get();

            //Passing the task array to the view
            return $products;

    }
}