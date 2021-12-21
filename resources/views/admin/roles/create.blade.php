@component('admin.layouts.content' , ['title'=>'  مقام ها '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">لیست مقام  ها</a> </li>
        <li class="breadcrumb-item active" >ایجاد مقام </li>
    @endslot
    @slot('script')
        <script>
            $('#permissions').select2({
                'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
            })
        </script>
    @endslot
<div class="row">
    <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"> ایجاد مقام  </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.roles.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>


                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="label" class="col-md-4 col-form-label text-md-right">توضیحات</label>


                        <input id="label" type="text" class="form-control @error('label') is-invalid @enderror" name="label" value="{{ old('label') }}" required autocomplete="label" autofocus>

                        @error('label')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="permissions" class="col-md-4 col-form-label text-md-right"> دسترسی ها </label>
                        <select id="permissions" type="text" class="form-control select2-selection__rendered @error('permission') is-invalid @enderror" name="permissions[]"  multiple autofocus>
                            @foreach(\app\Admin\Permission::all() as $permission)
                                <option  value="{{$permission->id}}">{{$permission->name}} - {{$permission->label}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                    <a href="{{route('admin.permissions.index')}}" class="btn btn-warning">لغو</a>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
</div>
@endcomponent
