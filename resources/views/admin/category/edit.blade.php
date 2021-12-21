@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> ویرایش دسته بندی</h3>
        </div>
    </div>
    <form action="{{ route('category.update',$category->id) }}" class="padding-30" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">

        </div>
        <div class="form-group">
            <label >نام </label>
            <input type="text" class="form-control" name="name" placeholder="نام دسته بندی"
                   value="{{$category->name}}">
        </div>
        <div class="form-group">
            <label >توضیحات</label>
            <input type="text" class="form-control" name="description" placeholder="نام مستعار"
                   value="{{ $category->description }}">
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">افزودن</button>
            <a class="btn" href="{{ route('category.index') }}">بازگشت</a>
        </div>

    </form>
    </div>
@endsection
