<form action = '{{url('cart')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<input type="text" name="quantity" placeholder="Enter The Quantity">
	<input type = 'submit' value = 'Add to Cart'>
</form> 