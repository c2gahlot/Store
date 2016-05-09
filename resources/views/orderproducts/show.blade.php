@extends('layouts.app')

@section('content')


		@foreach ($orders as $order)

			{{$order->id}}&nbsp;&nbsp;{{$order->order_id}}&nbsp;&nbsp;{{$order->product_id}}&nbsp;&nbsp;{{$order->quantity}}

		@foreach

@endsection