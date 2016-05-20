<div class="container">
	
	<div class="row">
		<div class="col-md-10">
		<h3>Reviews</h3></br>
		</div>
		<div class="col-md-2">
			<form action='{{url('user')}}' method='get'>
				<input type='submit' class='btn btn-danger' value ='Order Statistics'>
			</form>
		</div>
	</div>

	<div class='row'>
			<table class='table table-bordered'>
				<thead>
					<tr>
						<th>Review ID</th>
						<th>Product Name</th>
						<th>Review</th>
						<th>Delete</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($reviews as $review) 
					<tr>
						<th>{{$review->id}}</th>
						<th>{{$review->product->name}}</th>
						<th>{{$review->description}}</th>
						<th>
							<form action='{{url('review/'.$review->id)}}' method='post'>
								<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
								<!--Method Spoofing-->	
								<input name="_method" type="hidden" value='delete' />
								<input type = "submit" class="btn btn-danger" value = "Submit" />
							</form>

						</th>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

</div>