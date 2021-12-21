@component('admin.layouts.content' , ['title'=>' ایجاد کاربر '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران</a> </li>
        <li class="breadcrumb-item active" > ویرایش  کاربر</li>

    @endslot
<div class="row">
    <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">  ویرایش  کاربر </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.users.update',['user'=>$user->id])}}" method="post">
                @csrf
                @method('PATCH ')
                <div class="card-body">
                    <div class="form-group">
                        <label for="username" class="col-md-4 col-form-label text-md-right">نام کاربری</label>


                            <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username}}" required autocomplete="username" autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>


                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">نام خانوادگی</label>


                        <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="nationalCode" class="col-md-4 col-form-label text-md-right">کد ملی</label>


                            <input id="nationalCode" type="text" class="form-control @error('nationalCode') is-invalid @enderror" name="nationalCode" value="{{ $user->nationalCode }}" required autocomplete="nationalCode" autofocus>

                            @error('nationalCode')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">شماره موبایل</label>


                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group ">
                        <label for="email" class="col-md-4 col-form-label text-md-right">ایمیل</label>


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right"> پسورد </label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار پسورد</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">

                    </div>

                  @if(!$user->hasVerifiedEmail())
                        <div class="form-check">
                            <input type="checkbox" name="verify" class="form-check-input" id="verify">
                            <label class="form-check-label " for="verify"> اکانت فعال باشد ؟</label>
                        </div>
                    @endif



                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label text-md-right">وضعیت کارمند</label>

                    <select id="status" type="text" class="form-control select2-selection__rendered @error('is_user') is-invalid @enderror" name="is_user" >
                        <option  value="0"> غیر فعال</option>
                        <option  value="1" @if($user->is_user == 1) @php
                            echo "selected";
                        @endphp @endif> فعال </option>

                    </select>
                    @error('is_user')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label text-md-right">وضعیت ادمین</label>

                    <select id="status" type="text" class="form-control select2-selection__rendered @error('is_SuperAdmin') is-invalid @enderror" name="is_SuperAdmin" >
                        <option  value="0">غیرفعال</option>
                        <option  value="1" @if($user->is_SuperAdmin == 1) @php
                            echo "selected";
                        @endphp @endif> فعال </option>

                    </select>
                    @error('is_SuperAdmin')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                    <a href="{{route('admin.users.index')}}" class="btn btn-warning float-left">لغو</a>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
</div>
@endcomponent
