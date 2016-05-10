<?php

namespace App\Repositories;
use Illuminate\Http\Request;

use App\Review;
use Auth;
use App\User;


class ReviewRepository {


    // Getting all the entities from carts table
	  public function allReview(){
        
            $reviews = User::find(Auth::user()->id)->reviews;

            return $reviews;

    }

    // Storing new row to the cart table
	 public function store(Request $request){

    	$review = new Review;

    	$review->user_id = Auth::user()->id;
    	$review->product_id = $request->product_id;
    	$review->description = $request->description;
    	$review->save();

    	return $review;
    }

}
