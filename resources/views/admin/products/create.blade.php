@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Добавить наименование запасной части</h3>
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group w-25">
                            <input type="text" name="title" class="form-control  mb-4"
                                   placeholder="марка авто">
                        </div>
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="form-group  ">
                            <textarea id="summernote" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Загрузите изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Автомобильная субкатегория</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Автомобильная категория</label>
                            <select class="form-control" name="subcategory_id">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Автомобильный бренд</label>
                            <select class="form-control" name="car_id">
                                @foreach($cars as $car)
                                    <option value="{{$car->id}}">{{$car->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>


            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
