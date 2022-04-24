@extends('layouts.app')

@section('content')

    @if(empty(!$prod))
        <div class="d-flex col-12 flex-wrap justify-content-around">
            @foreach($prod as $product)
                <div class="col-1 d-flex flex-column m-4">

                    <img src="{{url('storage/' . $product->image) }}" alt="image" class="flex-grow-1">

                    <a href="{{route('main.product', $product->id)}}" class="d-grid align-items-end text-center mt-2" >
                        <h5 >{{$product->title}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    @else
    <div>записей не найденно</div>
    @endif
@endsection

