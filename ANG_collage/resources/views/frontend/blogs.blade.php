{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')
<style>
    #blogs:active{
        color: yellow!important;
    }
</style>
    <!--================ End Header Menu Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Blogs</h2>
                            <div class="page_link">
                                <a href="{{ route('home') }}">Home</a>
                                <a href="{{ route('blogs') }}">Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach ($blogs as $blogss)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">{{ $blogss->tags }}</a>

                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{ $blogss->auther }}<i class="ti-user"></i></a></li>
                                            <li><a href="#">{{ $blogss->date }}<i class="ti-calendar"></i></a></li>
                                            {{-- <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="ti-comment"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="{{ asset('blogs/' . $blogss->images) }}" style="width: 100%;" alt="">
                                        <div class="blog_details">
                                            <a href="{{ route('blog', $blogss->id) }}">
                                                <h2>{{ $blogss->title }}</h2>
                                            </a>
                                            <p>{{ $blogss->short_description }}</p>
                                            <a href="{{ route('blog', $blogss->id) }}" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        {{-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            @foreach ($blogs as $blogss)
                                <div class="media post_item">
                                    <img src="{{ asset('blogs/' . $blogss->images) }}" style="width:35%;" alt="post">
                                    <div class="media-body">
                                        <a href="{{ route('blog', $blogss->id) }}">
                                            <h5>{{ $blogss->title }}</h5>
                                        </a>
                                        <p>{{$blogss->date}}</p>
                                    </div>
                                </div>
                            @endforeach

                            <div class="br"></div>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                @foreach ($blogs as $blogss)
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>{{ $blogss->category }}</p>
                                            
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="br"></div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ Start footer Area  =================-->
    {{-- @include('frontend.include.footer') --}}
@endsection
