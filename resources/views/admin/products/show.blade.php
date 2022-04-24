@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.product.index')}}">Назад</a></div>
                <div class="row">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название запачасти</th>
                            <th>Описание</th>
                            <th>Изображение</th>
                            <th>Редактировать</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$product->title}}</td>
                                <td >{!! $product->content !!}</td>
                                <td><img src="{{url('storage/' . $product->image)}}" alt=""></td>
                                <td><a href="{{route('admin.product.edit', $product->id)}}"><i class="far fa-edit"></i></a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
