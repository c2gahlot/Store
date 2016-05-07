@extends('layouts.app')

@section('content')

	<h1>Title</h1>
	{{$product->name}}</br></br>

	<h2>Description</h2>
	{{$product->description}}</br></br>

	<h3>Price</h3>
	Rs.&nbsp;&nbsp;{{$product->price}}</br></br>

	<form action = '{{url('cart')}}' method = 'post'>
	
	<input type = 'submit' value = 'Add to Cart'>
	</form> 

@endsection