@extends('admin.layouts.content', ['title'=>' لیست مثالات'])
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/articles">پنل مدیریت</a></li>
    <li class="breadcrumb-item active"> لیست مثالات</li>
@endsection
@section('content')
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="btn btn-primary is-active" href="{{route('articles.index')}}">
                    <i class="fa fa-refresh"></i>
                    مثالات
                </a>
                <a class="btn btn-primary" href="{{route('articles.create')}}">مقاله جدید</a>
            </div>
        </div>
        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>ردیف</th>
                    <th>تیتر</th>
                    <th> نام مستعار</th>
                    {{--                    <th>وضعیت</th>--}}
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>


                <tr role="row">
                    @foreach ($articles  as $art)
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
                        <td><a href="">{{$art->name}}</a></td>
                        <td><a href="">{{$art->description}}</a></td>
                        {{--                        <td><img src="{{ asset('img/category/1400') }}/{{$category->img}}" alt="{{$category->name}}" width="50px" height="50px"></td>--}}


                        <td>

                            <div class="btn-group">
                                <form action="{{ route('articles.destroy', $art->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn  btn-danger  btn-sm" type="submit" value="حذف"
                                           onclick="return confirm('آیا آیتم مورد نظر حذف گردد') "/>
                                    <i class="fa fa-trash-o"></i>
                                </form>
                                <a class="btn btn-warning btn-sm" href="{{ route('articles.edit', $art->id) }}">
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
        {{ $articles->links() }}
    </div>
@endsection
