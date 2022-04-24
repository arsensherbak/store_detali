@extends('layouts.app')

@section('content')

    <div class="d-flex col-12 flex-wrap justify-content-around">
        <h3>{{$product->title}}</h3>
        <h3>{!! $product->content !!}</h3>
        <img src="{{url('storage/' . $product->image)}}" alt="">
    </div>

@endsection

