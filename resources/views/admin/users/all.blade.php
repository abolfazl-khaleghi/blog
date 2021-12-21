@component('admin.layouts.content' , ['title'=>' لیست کاربران'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item active" >لیست کاربران</li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">لیست کاربران</h3>

                    <div class="card-tools d-flex">
                        <div class="btn-group-sm ml-2">
                            @can('add-user')
                                <a href="{{route('admin.users.create')}}" class="btn btn-info">کاربر جدید</a>
                            @endcan

                        </div>
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <input type="text" name="search" class="form-control float-right"
                                       value="{{request('search')}}" placeholder="جستجو">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            کاربران مدیر
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th> کاربر شماره</th>
                            <th>نام کاربری</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>کد ملی</th>
                            <th>ایمیل</th>
                            <th>تایید ایمیل</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}} </td>
                                <td>{{$user->lastname }}</td>
                                <td>{{$user->nationalCode}} </td>
                                <td>{{$user->email }}</td>
                                @if($user->email_verified_at)
                                    <td><span class="badge badge-success">فعال</span></td>
                                @else
                                    <td><span class="badge badge-danger">غیر  فعال</span></td>
                                @endif
                                <td class="d-flex">

                                    @can('delete-user')
                                        <form action="{{route('admin.users.destroy',['user'=>$user->id])}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                حذف
                                            </button>
                                        </form>
                                    @endcan
                                    @can('edit-user')
                                        <a href="{{route('admin.users.edit',['user'=>$user->id]) }}"
                                           class="btn btn-sm btn-outline-info">ویرایش</a>
                                    @endcan
                                    @if($user->isStaffUser())
                                        @can('permission-user')
                                            <a href="{{route('admin.users.permissions',['user'=>$user->id]) }}"
                                               class="btn btn-sm btn-outline-warning">اعمال دسترسی</a>
                                        @endcan
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{$users->render()}}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endcomponent
