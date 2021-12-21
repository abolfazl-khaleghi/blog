@component('admin.layouts.content' , ['title'=>' ایجاد کاربر '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ایجاد کاربر</li>

    @endslot
@section('script')
    <script>

        document.addEventListener("DOMContentLoaded", function () {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }

        $(".chosen-select").chosen()
    </script>
@endsection
<div class="row">
    <div class="col-md-12">
    @include('admin.layouts.error')
    <!-- general form elements -->
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title"> پروفایل کاربر </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.users.profileSave',[$user->id])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="username" class="col-md-4 col-form-label text-md-right">نام کاربری</label>
                        <input id="name" type="text" class="form-control @error('username') is-invalid @enderror"
                               name="username" value="{{ $user->username}}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <img src="{{$user->avatar}}" width="200" height="300" style="align-content: center">
                        <div class="input-group">

                            <input type="text" id="image_label"
                                   class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                   aria-label="Image" aria-describedby="button-image">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب تصویر
                                    شاخص
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">نام</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">نام خانوادگی</label>


                        <input id="name" type="text" class="form-control @error('lastname') is-invalid @enderror"
                               name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="nationalCode" class="col-md-4 col-form-label text-md-right">کد ملی</label>


                        <input id="nationalCode" type="text"
                               class="form-control @error('nationalCode') is-invalid @enderror" name="nationalCode"
                               value="{{$user->nationalCode }}" required autocomplete="nationalCode" autofocus>

                        @error('nationalCode')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">شماره موبایل</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                               name="phone" value="{{$user->phone }}" required autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label for="email" class="col-md-4 col-form-label text-md-right">ایمیل</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{$user->email }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right"> پسورد </label>


                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تکرار پسورد</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               autocomplete="new-password">

                    </div>


                    <div class="card-footer">
                        <a href="{{route('admin.users.index')}}" class="btn btn-warning float-left">لغو</a>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endcomponent
