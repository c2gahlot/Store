@extends('layouts.app')

@section('content')

<div class="container">

	<div class='row'>

		<form action="{{url('user')}}" method='get'>
			<input type="submit" class='btn btn-primary col-md-2 col-md-offset-10' value='Statistics'></input>
		</form>

	</div>

	<div class='row'> 
    
    	<table class='table table-bordered col-mod-6 col-mod-offset-3'>
	
			<thead>

				<tr>
					<th><h4>Product</h4></th>
					<th><h4>Price</h4></th>
				</tr>

			</thead>

			<tbody>
    			
    			@foreach ($products as $product)
    				<tr>	
   					<td><a href="{{ URL::to('product/'.$product->id) }}">{{$product->name}}</a></td>
   					<td>Rs {{$product->price}}</td>
					</tr><br>
    			@endforeach

			</tbody>

    	</table>

	</div>

</div>

@endsection