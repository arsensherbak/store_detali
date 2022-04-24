@extends('layouts.app')

@section('content')

        <div class="d-flex col-12 flex-wrap justify-content-around">
            @foreach($category->subcategories as $subcategory)
                <div class="col-2 d-flex flex-column m-4">

                    <img src="{{url('storage/' . $subcategory->image) }}" alt="image" class="flex-grow-1">

                    <a href="{{route('main.show.product', $subcategory->id)}}" class="d-grid align-items-end text-center mt-2" >
                        <h5 >{{$subcategory->title}}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

