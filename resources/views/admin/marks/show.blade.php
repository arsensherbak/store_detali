@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.mark.index')}}">Назад</a></div>
                <div class="row">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Марка авто</th>
                            <th>Модельный ряд</th>
                            <th>Редактировать</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$mark->title}}</td>
                                <td>@foreach($mark->cars as $car)
                                {{$car->title}}<br>
                                    @endforeach
                                </td>
                                <td><a href="{{route('admin.mark.edit', $mark->id)}}"><i class="far fa-edit"></i></a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
