<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

class UserController extends Controller
{
    
	public function index(){

		$user = User::with('orders.order_products.product')->find(Auth::user()->id);
		
		return view('users.index', compact('user'));

	}

}