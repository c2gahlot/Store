@extends('layouts.app')

@section('content')

	@foreach ($orderproducts as orderproduct)

	{{orderproduct->id}}&nbsp;&nbsp;&nbsp;{{orderproduct->product_id}}&nbsp;&nbsp;&nbsp;{{orderproduct->quantity}}</br>

	@endforeach

@endsection