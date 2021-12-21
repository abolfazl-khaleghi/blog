@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> ایجاد دسته بندی</h3>
        </div>
    </div>
    <form action="{{ route('category.store') }}" class="padding-30" method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group">

        </div>
        <div class="form-group">
            <label >نام </label>
            <input type="text" class="form-control" name="name" placeholder="نام دسته بندی"
                   value="{{old("name")}}">
        </div>
        <div class="form-group">
            <label >توضیحات</label>
            <input type="text" class="form-control" name="description" placeholder="نام مستعار"
                   value="{{ old("description") }}">
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">افزودن</button>
            <a class="btn" href="{{ route('category.index') }}">بازگشت</a>
        </div>

    </form>
    </div>
@endsection
