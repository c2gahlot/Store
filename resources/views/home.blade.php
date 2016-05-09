@extends('layouts.app')

@section('content')


	 
    @foreach ($products as $product)

	<!--
   		 Displaying name of all the with price tag
   	 -->    
    <a href="{{ URL::to('product/'.$product->id) }}">{{$product->name}}</a>&nbsp;&nbsp;Rs&nbsp;{{$product->price}}</br>

    @endforeach

@endsection
