<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\ReviewRepository;

class ReviewController extends Controller
{
    public $reviews;

    //Injecting repository to the controller
    public function __construct(ReviewRepository $reviews){
    
         $this->reviews = $reviews;

    }

    //Showing the list all the products in the cart using allcart funtion from repository
    public function index(Request $request){
    	
        $reviews = $this->reviews->allReview();

          
    	return view('reviews.index', compact('reviews'));
    }

    //Storing the new entry in the carts table using repository
    public function store(Request $request){

    	$review =  $this->reviews->store($request);
    	return redirect ('/review');
    }

}