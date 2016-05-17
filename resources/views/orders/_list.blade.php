	@foreach ($orders as $order)
	

	<br/>{{$order->id}}<br/>
	
	@foreach ($order->order_products as $order_product) 		

	{{$order_product->product->name}}<br/>

	@endforeach

	@endforeach