<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

use App\Order;

use App\Repositories\UserRepository;

class UserController extends Controller
{

	public $users;

	public function __construct(UserRepository $users){

		$this->users = $users;

	}
    
	public function index(Request $requests){

		$user = $this->users->allUser();
		
		return view('users.index', compact('user'));

	}

	public function show($id){
        
        $order = Order::with("order_products")->find($id);
       
       return view('orders.show', compact('order'));
    }

}