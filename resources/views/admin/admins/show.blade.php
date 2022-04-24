@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.user.index')}}">Назад</a></div>
                <div class="row">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Name Admin</th>
                            <th>email</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}
                                </td>
                                <td><a href="{{route('admin.user.edit', $user->id)}}"><i class="far fa-edit"></i></a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
