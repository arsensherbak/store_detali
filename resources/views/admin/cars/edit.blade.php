@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
               <div class="col-12">
                   <h3>Редактировать название бренда</h3>
                   <form action="{{route('admin.car.update', $car->id)}}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PATCH')
                       <input type="text" name="title" class="form-control col-3 mb-4"
                              placeholder="{{$car->title}}" value="{{$car->title}}">
                       @error('title')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <div class="form-group">
                           <label for="exampleInputFile">Загрузите изображение</label>
                           <div class="w-25">
                               <img src="{{url('storage/' . $car->image) }}" alt="image" class="w-50">
                           </div>
                           <div class="input-group">
                               <div class="custom-file">
                                   <input type="file" class="custom-file-input" id="exampleInputFile"
                                          name="image">
                                   <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                               </div>
                               <div class="input-group-append">
                                   <span class="input-group-text">Upload</span>
                               </div>
                           </div>
                           @error('image')
                           <div class="text-danger mb-4">это поле обязательное</div>
                           @enderror
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
