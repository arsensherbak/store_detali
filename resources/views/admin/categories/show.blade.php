@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.category.index')}}">Назад</a></div>
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
                                <td>{{$category->title}}</td>
                                <td>Модели</td>
                                <td><a href="{{route('admin.category.edit', $category->id)}}"><i class="far fa-edit"></i></a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
