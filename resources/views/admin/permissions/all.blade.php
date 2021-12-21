@component('admin.layouts.content' , ['title'=>' لیست دسترسی'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item active" >لیست دسترسی</li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست دسترسی </h3>

                    <div class="card-tools d-flex">
                        <div class="btn-group-sm ml-2">
                            <a href="{{route('admin.permissions.create')}}" class="btn btn-info">دسترسی جدید</a>

                        </div>
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <input type="text" name="search" class="form-control float-right" value="{{request('search')}}" placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
{{--                        <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-sm">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>--}}
{{--                            </svg>--}}
{{--                            کاربران مدیر--}}
{{--                        </a>--}}
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>   شماره</th>
                            <th>نام </th>
                            <th>توضیحات</th>
                            <th>اقدامات</th>
                        </tr>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$permission->name}} </td>
                            <td>{{$permission->label }}</td>
{{--                            @if($user->email_verified_at)--}}
{{--                            <td><span class="badge badge-success">فعال</span></td>--}}
{{--                            @else--}}
{{--                                <td><span class="badge badge-danger">غیر  فعال</span></td>--}}
{{--                            @endif--}}
                            <td class="d-flex">

                                <form action="{{route('admin.permissions.destroy',['permission'=>$permission->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        حذف
                                    </button>
                                </form>
{{--                                @can('edit-user',$user)--}}
                                    <a href="{{route('admin.permissions.edit',['permission'=>$permission->id]) }}" class="btn btn-sm btn-info">ویرایش</a>
{{--                                @endcan--}}
                            </td>
                        </tr>
                    @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{$permissions->render()}}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endcomponent
