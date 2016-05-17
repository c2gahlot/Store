<div class="container">
	<div class='row'>
		<h3>Hello, {{Auth::user()->name}}</h3></br>
	</div>
	<div class="row">
		<div class="col-md-10">
		<h4>My Orders</h4></br>
		</div>
		<div class="col-md-2">
			<form action='{{url('review')}}' method='get'>
				<input type='submit' class='btn btn-danger' value ='My Reviews'>
			</form>
		</div>
	</div>

	@foreach ($user->orders as $order)
		<h5>Order Number : {{$order->id}}</h5>
		
		<div class='row'>
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th>Name</th>
						<th>Quantity</th>
						<th>Details</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($order->order_products as $product) 
					<tr>
						<th>{{$product->product->name}}</th>
						<th>{{$product->quantity}}</th>
						<th>{{$product->product->description}}</th>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>


	@endforeach

</div>