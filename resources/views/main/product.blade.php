@extends('layouts.app')

@section('content')

    <div class="d-flex col-12 flex-wrap justify-content-around">
        @foreach($subcategory->products as $product)
            <div class="col-2 d-flex flex-column m-4">

                <img src="{{url('storage/' . $product->image) }}" alt="image" class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('main.product', $product->id)}}" class="d-grid align-items-end text-center mt-2" >
                    <h5 >{{$product->title}}</h5>
                </a>

                    @auth()
                        <span>{{$product->likes_count}}</span>
                        <form action="{{route('main.Likes', $product->id)}}" method="post" class="w-25 ">
                            @csrf

                            <button type="submit" class="border-0 bg-transparent">

                                @if(auth()->user()->likedProducts->contains($product->id))
                                    <i class="fas fa-heart"></i>
                                @else
                                    <i class="far fa-heart"></i>
                                @endif

                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div>
                            <span>{{$product->likes_count}}</span>
                            <i class="far fa-heart"></i>
                        </div>
                    @endguest
                </div>
            </div>

        @endforeach
    </div>

@endsection

