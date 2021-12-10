@extends('layouts.app')

@section('content')
<table class="table">

    <thead role="rowgroup">
    <tr role="row" class="title-row">
        <th>نام دسته بندی</th>
        <th> توضیحات </th>
        <th>عملیات</th>
    </tr>
    </thead>
    <tbody>


    <tr role="row">



            <td><a href="">{{$category->name}}</a></td>
            <td><a href="">{{$category->description}}</a></td>
            <td>

                <div class="btn-group">
                    <a class="btn  btn-danger  btn-sm" href="{{route('category.index')}}"   class="item-delete mlg-15">
                        <i class="fa fa-trash-o"></i>
                        بازگشت
                    </a>

    </tbody>

</table>
@endsection
