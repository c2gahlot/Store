<form action = '{{url('cart')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<div class="input-group">
	<input type="text" class="form-control" name="quantity" placeholder="Enter The Quantity">
	<span class="input-group-btn">
	<input type = 'submit' class="btn btn-primary" value = 'Add to Cart'>
	</span>
	</div>
</form> 