@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
               <div class="col-12">
                   <h3>Добавить категорию</h3>
                   <form action="{{route('admin.subcategory.store')}}" method="post"
                   enctype="multipart/form-data"
                   >
                       @csrf
                       <input type="text" name="title" class="form-control col-3 mb-4"
                              placeholder="марка авто">
                       @error('title')
                       <div class="text-danger mb-4">это поле обязательное</div>
                       @enderror
                       <div class="form-group">
                           <label>Автомобильный бренд</label>
                           <select class="form-control" name="category_id">
                               @foreach($categories as $category)
                                   <option value="{{$category->id}}">{{$category->title}}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="input-group">
                           <div class="custom-file">
                               <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                               <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                               <span class="input-group-text">Upload</span>
                           </div>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
