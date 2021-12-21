@component('admin.layouts.content' , ['title'=>' ایجاد دسترسی '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">لیست دسترسی ها</a> </li>
        <li class="breadcrumb-item active" >ایجاد دسترسی</li>
    @endslot
<div class="row">
    <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"> ایجاد دسترسی </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.permissions.store')}}" method="post">
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
