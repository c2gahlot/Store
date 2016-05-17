<form action = '{{url('review')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<input type="text" name="description" placeholder="Add Description">
	<input type = 'submit' value = 'Add Review'>
</form> 	
