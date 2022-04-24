@extends('layouts.app')

@section('content')
    <div class="d-flex col-12 flex-wrap justify-content-around">
        @foreach($car->categories as $category)
            <div class="col-2 d-flex flex-column m-4">

                <img src="{{url('storage/' . $category->image) }}" alt="image" class="flex-grow-1">

                <a href="{{route('main.show.subCategory', $category->id)}}"
                   class="d-grid align-items-end text-center mt-2">
                    <h5>{{$category->title}}</h5>
                </a>
            </div>
    </div>


    @endforeach
@endsection

