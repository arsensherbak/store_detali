@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
               <div class="col-12">
                   <h3>Редактировать название бренда</h3>
                   <form action="{{route('admin.user.update', $user->id)}}" method="post">
                       @csrf
                       @method('PATCH')
                       <input type="text" name="name" class="form-control col-3 mb-4"
                              placeholder="{{$user->name}}" value="{{$user->name}}">
                       @error('name')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <input type="text" name="email" class="form-control col-3 mb-4"
                              placeholder="{{$user->email}}" value="{{$user->email}}">
                       @error('email')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>





            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
