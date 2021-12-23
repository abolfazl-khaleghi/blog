@component('admin.layouts.content' , ['title'=>' ویرایش نظرات '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">ویرایش نظرات</li>
    @endslot
@section('content')
    <div class="row">
        <div class="col-md-12">
        @include('admin.layouts.error')
        <!-- general form elements -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title"> ویرایش نظرات </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('comment.update', $comment->id)}}" method="post">
                    @csrf
                    @method('PATCH ')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">نویسنده </label>
                            <input id="name" type="text" class="form-control @error('nameUser') is-invalid @enderror"
                                   name="nameUser" value="{{old('nameUser',$comment->nameUser) }}" required
                                   autocomplete="nameUser" autofocus>

                            @error('nameUser')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="label" class="col-md-4 col-form-label text-md-right">موضوع</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                   name="title" required autocomplete="title" autofocus
                                   value=" {{ old('title',$comment->title) }}">
                        </div>
                        <div class="form-group">
                            <label for="label" class="col-md-4 col-form-label text-md-right">ایمیل</label>
                            <input id="Email" type="text" class="form-control @error('Email') is-invalid @enderror"
                                   name="Email" required autocomplete="Email" autofocus
                                   value=" {{ old('Email',$comment->Email) }}">
                        </div>

                        <div class="form-group">
                            <label for="label" class="col-md-4 col-form-label text-md-right">نظر</label>
                            <textarea id="text" type="text" class="form-control @error('text') is-invalid @enderror"
                                      name="text" required autocomplete="body" autofocus>
                                {{ old('body',$comment->text) }}
                            </textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->


                    <div class="card-footer">
                        <a href="{{route('comment.index')}}" class="btn btn-warning float-left">لغو</a>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
@endsection
@endcomponent
