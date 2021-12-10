
@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="btn btn-primary is-active" href="{{route('category.index')}}">
                    <i class="fa fa-refresh"></i>
                    دسته بندی ها
                </a>
                <a  class="btn btn-primary" href="{{route('category.create')}}">دسته بندی  جدید</a>
            </div>
        </div>
        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>ردیف</th>
                    <th>نام دسته بندی</th>
                    <th> نام مستعار</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>


                <tr role="row">
                    @foreach ($categories  as $category)
{{--                        @switch($category->status)--}}
{{--                            @case(0)--}}
{{--                            @php--}}
{{--                                $url=route('category.updateStatus',' $category->id');--}}
{{--                                $status="غیرفعال"--}}
{{--                            @endphp--}}
{{--                            @break--}}
{{--                            @case(1)--}}
{{--                            @php--}}
{{--                                $url=route('category.updateStatus','$category->id');--}}
{{--                                $status=' فعال'--}}
{{--                            @endphp--}}
{{--                            @break--}}
{{--                            @default--}}

{{--                        @endswitch--}}

                        <td><a href="">  {{ $loop->index+1 }}</a></td>
                        <td><a href="">{{$category->name}}</a></td>
                        <td><a href="">{{$category->description}}</a></td>
                        <td><img src="{{ asset('img/category/1400') }}/{{$category->img}}" alt="{{$category->name}}" width="50px" height="50px"></td>


                        <td>

                            <div class="btn-group">
                                <a class="btn  btn-danger  btn-sm" href="{{route('category.destroy',$category->id)}}"   onclick="return confirm('آیا آیتم مورد نظر حذف گردد') " class="item-delete mlg-15" title="حذف">
                                    <i class="fa fa-trash-o"></i>
                                    حذف
                                </a>
                                <a class="btn  btn-success  btn-sm" href="{{route('category.show',$category->id)}}" >
                                    <i class="fa fa-view"></i>
                                    مشاهده
                                </a>
                                <a class="btn btn-warning btn-sm" href="{{ route('category.edit', $category->id) }}">
                                    <i class="fa fa-edit"></i>
                                    ویرایش
                                </a>

                            </div>
                        </td>
                </tr>
                @endforeach

                </tbody>

            </table>

        </div>
        {{ $categories->links() }}
    </div>
@endsection
