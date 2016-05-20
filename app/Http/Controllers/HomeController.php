<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Repositories\HomeRepository;
use App\Jobs\SendOrderEmail;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $products;

    public function __construct(HomeRepository $products)
    {
        $this->middleware('auth');
        $this->products = $products;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->products->allProducts();
        // $email = Auth::user()->email;
        
        // $job = new SendOrderEmail($email);
        // $this->dispatch($job);
        
        return view('home', compact('products'));
    }
}
