@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row d-flex justify-content-around">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"> <i class="nav-icon fas fa-car"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Марка авто</span>
                                <span class="info-box-number">
                  {{$data['marksCount']}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-car-side"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Модель авто</span>
                                <span class="info-box-number">
                  {{$data['carsCount']}}

                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-archive"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Категория заказа</span>
                                <span class="info-box-number">{{$data['categoryCount']}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"> <i class="nav-icon fas fa-archive"></i></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Подкатегория</span>
                                <span class="info-box-number">{{$data['subcategoryCount']}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>


                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="nav-icon fas fa-voicemail"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Продукт</span>
                                <span class="info-box-number">{{$data['productsCounts']}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="nav-icon fas fa-user-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Админы</span>
                                <span class="info-box-number">{{$data['adminsCount']}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>




            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
