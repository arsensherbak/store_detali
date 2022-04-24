@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
               <div class="col-12">
                   <h3>Добавить марку авто</h3>
                   <form action="{{route('admin.user.store')}}" method="post">
                       @csrf
                       <input type="text" name="name" class="form-control col-3 mb-4"
                              placeholder="имя админа">
                       @error('name')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <input type="text" name="email" class="form-control col-3 mb-4"
                              placeholder="email admina">
                       @error('email')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <input type="password" name="password" class="form-control col-3 mb-4"
                              placeholder="ваш пароль">
                       @error('password')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <input type="hidden" name="role" class="form-control col-3 mb-4"
                             value="1">


                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>





            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
