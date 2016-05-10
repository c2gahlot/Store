@extends('layouts.app')

@section('content')
	
	@foreach ($reviews as $review)

	
    {{$review->id}}&nbsp;&nbsp;&nbsp;&nbsp;{{$review->product_id}}&nbsp;&nbsp;&nbsp;&nbsp;{{$review->description}}</br>

    @endforeach

@endsection