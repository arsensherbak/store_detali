@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
               <div class="col-12">
                   <h3>Редактировать название бренда</h3>
                   <form action="{{route('admin.subcategory.update', $subcategory->id)}}" method="post">
                       @csrf
                       @method('PATCH')
                       <input type="text" name="title" class="form-control col-3 mb-4"
                              placeholder="{{$subcategory->title}}" value="{{$subcategory->title}}">
                       @error('title')
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
