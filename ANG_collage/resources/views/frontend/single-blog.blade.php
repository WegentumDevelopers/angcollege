{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    {{-- <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Blog Details</h2>
                <div class="page_link">
                  <a href="{{route('home')}}">Home</a>
                  <a href="#">Blog</a>
                  <a href="#">Blog Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <h2 class="mb-3">{{$blog->title}}</h2>

                            <div class="feature-img m-auto">
                                <img class="img-fluid m-auto" style="width: 100%;" src="{{asset('blogs/'.$blog->images)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">

                                    <a href="#">{{$blog->tags}}</a>
                                    
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">{{$blog->auther}}<i class="ti-user"></i></a></li>
                                    <li><a href="#">{{$blog->date}}<i class="ti-calendar"></i></a></li>
                                    {{-- <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li> --}}
                                </ul>
                                {{-- <ul class="social-links">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-github"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$blog->title}}</h2>
                            <p class="excert">
                            {{$blog->short_description}}
                            </p>
                            <p>
                             {!!$blog->long_description!!}
                            </p>
                        </div>
                        
                    </div>
                    {{-- <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="text-white ti-arrow-left"></i></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="text-white ti-arrow-right"></i></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn">Post Comment</a>
                        </form>
                    </div> --}}
                </div>
                <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                @foreach ($bloggs as $blogss)
                                    <div class="media post_item">
                                        <img src="{{ asset('blogs/' . $blogss->images) }}" style="width:45%;" alt="post">
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
                                    @foreach ($bloggs as $blogss)
                                        <li>
                                            <a href="{{route('blog',$blogss->id)}}" class="d-flex justify-content-between">
                                                <p>{{ $blogss->category }}</p>
                                                {{-- <p>37</p> --}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="br"></div>
                            </aside>
                            
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    @foreach ($bloggs as $blogss)
                                    <li><a href="{{route('blog',$blogss->id)}}">{{$blogss->tags}}</a></li>
                                        
                                    @endforeach
                                    
                                </ul>
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
