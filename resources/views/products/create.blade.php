@extends('layouts.app')

@section('content')

<form action = {{url('product')}} method='post'>
	<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
	<input type = 'text' name = 'name' placeholder='Name of the product'>
	<input type = 'text' name = 'description' placeholder='Description of the product'>
	<input type = 'text' name = 'stock' placeholder='Stock of the product'>
	<input type = 'text' name = 'price' placeholder='Price of the product'>
	<input type = 'submit' value='Add product'>
</form>

@endsection