@extends('layouts.app')

@section('content')


{{$order->id}}

 	@foreach ($order->order_products as $order_product)

 	 		<li>{{$order_product->product->name}}</li>

 	@endforeach

@endsection