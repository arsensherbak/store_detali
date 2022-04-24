@extends('layouts.app')

@section('content')

        <h3 class="text-center">Автомобильная марка {{$mark->title}}</h3>

    <div class="d-flex col-12 flex-wrap justify-content-around">
        @foreach($mark->cars as $car)
            <div class="col-2 d-flex flex-column m-4">
                <img src="{{url('storage/' . $car->image) }}" alt="image" class="flex-grow-1">
                <a href="{{route('main.show.category', $car->id)}}"
                   class="d-grid align-items-end text-center mt-2 text-decoration-none" >
                    <h5 >{{$car->title}}</h5>
                </a>
            </div>

        @endforeach
    </div>


@endsection

