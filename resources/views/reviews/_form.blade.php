<form action = '{{url('review')}}' method = 'post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type="hidden" name="product_id" value='{{$product->id}}'>
	<div class="input-group">
		<input type="text" class="form-control" name="decription" placeholder="Add Description">
		<span class="input-group-btn">
			<input type = 'submit' class="btn btn-default" value = 'Add Review'>
		</span>
	</div>
</form> 