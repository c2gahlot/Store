	<div class="container">
		
		<div class='col-md-7'>
		<div class="row">
			<div class="panel panel-default">
			<div class="panel-heading">Product Name</div>
  			<div class="panel-body">{{$product->name}}</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
			<div class="panel-heading">Product Description</div>
  			<div class="panel-body">{{$product->description}}</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
			<div class="panel-heading">Price</div>
  			<div class="panel-body">Rs. {{$product->price}}</div>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
			<div class="panel-heading">Available Stock</div>
  			<div class="panel-body">{{$product->stock}}</div>
			</div>
		</div>
		</div>
		
		<div class='col-md-4 col-md-offset-1'>
		<div class="row">
			@include('carts._form') <br/>
		</div>
		<div class="row">	
			@include('reviews._form') <br/>
		</div>

	</div>

	@include('reviews._list', ['reviews' => $product->reviews])

	</div>