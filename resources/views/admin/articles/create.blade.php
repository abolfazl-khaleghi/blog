@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> ایجاد مفاله</h3>
        </div>
    </div>
    <form action="{{ route('articles.store') }}" class="padding-30" method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group">

        </div>
        <div class="form-group">
            <label >نام </label>
            <input type="text" class="form-control" name="name" placeholder="تیتر"
                   value="{{old("name")}}">
        </div>
        <div class="form-group">
            <label >تصویر شاخص </label>
            <input type="file" class="form-control" name="img"
                   value="{{old("name")}}">
        </div>
        <div class="form-group">
            <label >توضیحات</label>
            <textarea type="text" class="form-control" name="description" placeholder="نام مستعار"
                      value="{{ old("description") }}"></textarea>
        </div>
        <div class="form-group">
            <label for="permissions" class="col-md-4 col-form-label text-md-right"> دسته ها </label>
            <select id="permissions" type="text" class="form-control select2-selection__rendered @error('permission') is-invalid @enderror" name="category_id[]"  multiple autofocus>
                @foreach(\App\Models\Category::get() as $cate)
                    <option  value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="card-footer">
            <button class="btn btn-success" type="submit">افزودن</button>
            <a class="btn" href="{{ route('category.index') }}">بازگشت</a>
        </div>

    </form>
    </div>
@endsection
