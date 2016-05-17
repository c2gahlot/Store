@extends('layouts.app')

@section('content')


{{$order->id}}

 	@foreach ($order->order_products as $order_product)

 	 		<li>{{$order_product->product->name}} {{$order_product->product->price}}</li>


 	@endforeach

@endsection