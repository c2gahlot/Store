@extends('layouts.app')

@section('content')

	<!--
   	 Showing name of the product
   	-->
	<h1>Title</h1>
	{{$product->name}}</br></br>

	<!--
   	 Showing description of the product
   	-->
	<h2>Description</h2>
	{{$product->description}}</br></br>

	<!--
   	 Showing price of the product
   	-->
	<h3>Price</h3>
	Rs.&nbsp;&nbsp;{{$product->price}}</br></br>

	<!--
   	 Showing available of the product
   	-->
	<h3>Available Stock</h3>
	Rs.&nbsp;&nbsp;{{$product->stock}}</br></br>

	<!--
   	From to add product to the cart
   	-->
	<form action = '{{url('cart')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<input type="text" name="quantity" placeholder="Enter The Quantity">
	<input type = 'submit' value = 'Add to Cart'>
	</form> </br>

	<form action = '{{url('review')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<input type="text" name="description" placeholder="Add Description">
	<input type = 'submit' value = 'Add Review'>
	</form> 	

@endsection