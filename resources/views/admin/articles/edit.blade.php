@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> ویرایش دسته بندی</h3>
        </div>
    </div>
    <form action="{{ route('articles.update',$articles->id) }}" class="padding-30"
          method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">

        </div>
        <div class="form-group">
            <label >نام </label>
            <input type="text" class="form-control" name="name" placeholder="نام دسته بندی"
                   value="{{$articles->name}}">
        </div>
        <div class="form-group">
            <label >توضیحات</label>
            <input type="text" class="form-control" name="description" placeholder="نام مستعار"
                   value="{{ $articles->description }}">
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">افزودن</button>
            <a class="btn" href="{{ route('articles.index') }}">بازگشت</a>
        </div>

    </form>
    </div>
@endsection
