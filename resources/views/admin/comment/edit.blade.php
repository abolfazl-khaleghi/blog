@component('admin.layouts.content' , ['title'=>' ویرایش نظرات '])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">لیست نظرات ها</a> </li>
        <li class="breadcrumb-item active" >ویرایش نظرات</li>
    @endslot
@section('script')
    <script>

        document.addEventListener("DOMContentLoaded", function() {

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
                    <h3 class="card-title"> ویرایش نظرات </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.comment.update', $comment->id)}}" method="post">
                    @csrf
                    @method('PATCH ')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">نویسنده </label>


                            <input id="name" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{old('user_id',$comment->user->name) }}" required autocomplete="user_id" autofocus>

                            @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="label" class="col-md-4 col-form-label text-md-right">نظر</label>


                            <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" required autocomplete="body" autofocus>
                                {{ old('body',$comment->body) }}
                            </textarea>

                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

<div class="form-group">
    <select name="approved" id="approved">
        <option value="0">منتشر نشده</option>
        <option value="1"@if($comment->approved==1)
            {{"selected"}}
            @endif>
            در انتظار انتشار
        </option>
        <option value="2"@if($comment->approved==2)
            {{"selected"}}
            @endif>منتشر شده</option>
    </select>
</div>
                    </div>
                    <!-- /.card-body -->


                    <div class="card-footer">
                        <a href="{{route('admin.comment.index')}}" class="btn btn-warning float-left">لغو</a>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
@endcomponent
