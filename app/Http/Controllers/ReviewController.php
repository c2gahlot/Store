<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\ReviewRepository;

use App\Review;

use App\Http\Requests\StoreReviewRequest;

use Gate;

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
    public function store(StoreReviewRequest $request){

    	$review =  $this->reviews->store($request);
    	return redirect ('/review');
    }

    public function destroy($id){

        $review = Review::findOrFail($id);

        if (Gate::denies('destroy', $review)) {
            
            return 'Not Allowed';
        }

        else{

            Review::destroy($id);

            return redirect('/review');
        }

    }

}