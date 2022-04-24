@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('admin.car.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <div class="col-12">

                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Модель авто</th>
                                <th>Редактирование</th>
                                <th>Удаление</th>
                                <th>Подробности</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                            <tr>
                                <td>{{$car->title}}</td>
                                <td><a href="{{route('admin.car.edit', $car->id)}}"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <form action="{{route('admin.car.delete', $car->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="far fa-trash-alt text-danger"></i></button>

                                    </form>
                                    </td>
                                <td><a href="{{route('admin.car.show', $car->id)}}"><i class="far fa-lightbulb"></i></a></td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
