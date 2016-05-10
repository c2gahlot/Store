@extends('layouts.app')

@section('content')
	
	@foreach ($carts as $cart)

	<form action='{{url('cart/'.$cart->id)}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
		
	<!--Method Spoofing-->	
	<input name="_method" type="hidden" value='delete' />
	<input type='submit' value='Delete'>
	</form>
	<!--
   		 Displaying all the product IDs in the cart with its quantity
   	-->
    {{$cart->id}}&nbsp;&nbsp;&nbsp;&nbsp;{{$cart->product_id}}&nbsp;&nbsp;&nbsp;&nbsp;{{$cart->quantity}}</br>

    @endforeach

    <form action='{{url('orderproduct')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type='submit' value='Place Order'>
	</form>

@endsection