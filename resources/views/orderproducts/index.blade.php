@extends('layouts.app')

@section('content')

	@foreach ($orderproducts as $orderproduct)

	{{$orderproducts->order_id}}{{$orderproducts->product_id}}{{$orderproducts->quantity}}

	@endforeach

@endsection