@extends('layouts.app')

@section('content')
    <div class="text-center col-12">
        <form action="{{route('main.search')}}" method="GET">
            @csrf
            <input type="text" name="s" placeholder="поиск товара" class="w-50 m-2 p-2 text-black">
            <button type="sunmit" class="btn-outline-dark  p-2">искать</button>
        </form>
    </div>
    <h3 class="col-12 text-danger text-center mt-2 text-black">Каталог Автозапчастей</h3>

    <div class="d-flex col-12 flex-wrap justify-content-around">
        @foreach($marks as $mark)
            <div class="col-2 d-flex flex-column m-4">

                <img src="{{url('storage/' . $mark->image) }}" alt="image" class="flex-grow-1">

                <a href="{{route('main.show.car', $mark->id)}}"
                   class="d-grid align-items-end text-center mt-2
                   text-decoration-none text-black">
                    <h5>{{$mark->title}}</h5>
                </a>
            </div>
        @endforeach
    </div>


    <h2 class="text-center">Наши товари</h2>
    <div class="d-flex col-12 flex-wrap justify-content-around">
        @foreach($products as $product)
            <div class="col-1 d-flex flex-column m-4">

                <img src="{{url('storage/' . $product->image) }}" alt="image" class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('main.product', $product->id)}}"
                       class="text-center mt-2 text-decoration-none">
                        <h5>{{$product->title}}</h5>
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
    <div>
        {{$products->links()}}
    </div>
@endsection

