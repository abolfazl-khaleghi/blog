@extends('layout.master')
@section('content')
    @foreach($art as $artical)

        <div class="col-lg-12 p-5 mt-5">
            <div class="blog_main_inner">
                <div class="blog_main_item">
                    <div class="blog_img">
                        <img class="img-fluid" src="pics/blog/blog-1.jpg" alt="">
                        <div class="blog_date">
                            <h4>29</h4>
                            <h5>تیر, 1398</h5>
                        </div>
                    </div>
                    <div class="blog_text">
                        <a href="#"><h4>{{$artical->title}}</h4></a>
                        <div class="blog_author">
                            <a href="#">توسط نام و نام خانوادگی</a>
                            <a href="#">| طراح و توسعه دهنده وب</a>
                        </div>
                        <p>{{$artical->description}}</p>
                        <a class="more_btn" href="{{route("show.article",$artical->id)}}">مطالعه مقاله</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endsection
