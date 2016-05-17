	<div class="container">





	<!--
   	 Showing name of the product
   	-->
	<h3>Title</h3>
	<h5>{{$product->name}}</h5></br>
	<!--
   	 Showing description of the product
   	-->
	<h3>Description</h3>
	<h5>{{$product->description}}</h5></br>

	<!--
   	 Showing price of the product
   	-->
	<h3>Price</h3>
	<h5>Rs.&nbsp;&nbsp;{{$product->price}}</h5></br>

	<!--
   	 Showing available of the product
   	-->
	<h3>Available Stock</h3>
	<h5>Rs.&nbsp;&nbsp;{{$product->stock}}</h5></br>

	<!--
   	From to add product to the cart
   	-->   	

	@include('carts._form') <br/>

	@include('reviews._form') <br/>

	<h3>Reviews</h3>

	@include('reviews._list', ['reviews' => $product->reviews])

	</div>