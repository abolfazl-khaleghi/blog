@component('admin.layouts.content' , ['title'=>' ایجاد کاربر '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران</a> </li>
        <li class="breadcrumb-item active" >ایجاد کاربر</li>

    @endslot
<div class="row">
    <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"> ایجاد کاربر </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.users.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="username" class="col-md-4 col-form-label text-md-right">نام کاربری</label>


                            <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
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
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">نام خانوادگی</label>


                        <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="nationalCode" class="col-md-4 col-form-label text-md-right">کد ملی</label>


                            <input id="nationalCode" type="text" class="form-control @error('nationalCode') is-invalid @enderror" name="nationalCode" value="{{ old('nationalCode') }}" required autocomplete="nationalCode" autofocus>

                            @error('nationalCode')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">شماره موبایل</label>


                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group ">
                        <label for="email" class="col-md-4 col-form-label text-md-right">ایمیل</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">پسورد</label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار پسورد</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="verify" class="form-check-input" id="verify">
                        <label class="form-check-label" for="verify"> اکانت فعال باشد ؟</label>
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
