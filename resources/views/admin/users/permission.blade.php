@component('admin.layouts.content' , ['title'=>'  سطح دسترسی ها '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران ها</a> </li>
        <li class="breadcrumb-item active" >ایجاد اعمال دسترسی </li>
    @endslot
    @slot('script')
        <script>
            console.log( $('#roles'), $('#permissions'))
            $('#roles').select2
            $('#permissions').select2
        </script>
    @endslot
<div class="row">
    <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"> ایجاد سطح دسترسی  </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.users.permissions.store',['user'=>$user->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="label" class="col-md-4 col-form-label text-md-right">مقام ها</label>
                            <select id="roles" type="text" class="form-control @error('role') is-invalid @enderror" name="roles[]"  multiple autofocus>
                                @foreach(\App\Admin\Role::all() as $role)
                                    <option value="{{$role->id}}"{{ in_array($role->id , $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>{{$role->name}} - {{$role->label}}</option>
                                @endforeach
                            </select>
                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">دسترسی ها</label>


                            <select id="permissions" type="text" class="form-control @error('permission') is-invalid @enderror" name="permissions[]"  multiple autofocus>
                               @foreach(\app\Admin\Permission::all() as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}} - {{$permission->label}}</option>
                                @endforeach
                            </select>
                            @error('permissions')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
                    </div>
                <!-- /.card-body -->


                <div class="card-footer">
                    <a href="{{route('admin.users.index')}}" class="btn btn-warning">لغو</a>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
</div>
@endcomponent
