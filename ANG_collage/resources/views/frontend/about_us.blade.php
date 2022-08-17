{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')

<style>
    #content{
        width: 100%!important;
    }
    #about{
        color: yellow!important;
    }
</style>
    <!--================ End Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>About Us</h2>
                            <div class="page_link">
                                <a href="index.html">Home</a>
                                <a href="about-us.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    @foreach($about as $abb)
    <!--================ Start About Area =================-->
    <section id="about" class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item">
                <div class="col-lg-6 p-0"
                    style="background: url('https://demo.themefisher.com/eventre/images/background/pattern-background.jpg');background-size: cover;">
                    <div class="h_blog_img pt-5 pl-5 pr-0 pb-0">
                        <img class="img-fluid"
                            src="{{asset('images/'.$abb->about_img)}}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right">
                            <h4>About <b class="text-danger">ANG Ideal Group of Institutions</b></h4>
                            <p class="text-justify">
                             {{-- {{$abb->about}} --}}
                             @php
                                 echo $abb->about;
                             @endphp
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->
  <!--================ Start founder, director message =================-->
<section id="founder">
    <div class="events_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="text-white">Founder Message</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center overlay">
                <div class="col-12">
                    <div class="row bg-light p-0 m-0">
                        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-0">
                            <div class="rounded-circle">
                                <img class="w-100 h-100"
                                    src="{{asset('images/'.$abb->fimage)}}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 p-5"
                            style="background: url('frontend/style/img/message_bg.jpg');background-size:cover">
                            <div class="rounded-circle">
                                <h2>{{$abb->fname}}</h2>
                                {{-- <h4>14july1880</h4> --}}
                                <h6>Founder</h6>

                            </div>
                            <p class="mt-4"><i class="fa-solid fa-quote-left" style="font-size: xx-large;"></i>
                                @php
                                 echo $abb->fmsg;
                             @endphp!</p>
                        </div>
                    </div>
                    <div class="blocks_images p-2 shadow-lg ">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="director" class="" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 style="color: #002347;margin-top:3rem;margin-bottom:2rem;">Director & MD  Message</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center overlay">
            <div class=" col-xl-5 col-md-5 col-lg-5 col-sm-12 m-2"
                style="background: url('frontend/style/img/message_bg.jpg');background-size:cover;">
                <div class="row p-0 m-0">
                    <div
                        class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-0 d-flex align-items-center justify-content-center">
                        <div class="rounded-circle">
                            <img class="w-100 h-100"
                                src="{{asset('images/'.$abb->dimage)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-3">
                        <div class="rounded-circle">
                            <h2>{{$abb->dname}}</h2>
                            {{-- <h4>27july1885</h4> --}}
                            <h6>Director</h6>

                        </div>
                        <p class="mt-4"><i class="fa-solid fa-quote-left" style="font-size: x-large;"></i>  @php
                            echo $abb->dmsg;
                        @endphp</p>
                    </div>
                </div>
            </div>
            <div class=" col-xl-5 col-md-5 col-lg-5 col-sm-12 m-2"
                style="background: url('frontend/style/img/message_bg.jpg');background-size:cover;">
                <div class="row p-0 m-0">
                    <div
                        class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-0 d-flex align-items-center justify-content-center">
                        <div class="rounded-circle">
                            <img class="w-100 h-100"
                                src="{{asset('images/'.$abb->mdimage)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-3">
                        <div class="rounded-circle">
                            <h2>{{$abb->mdname}}</h2>
                            {{-- <h4>14july1890</h4> --}}
                            <h6>Managing Director</h6>

                        </div>
                        <p class="mt-4"><i class="fa-solid fa-quote-left" style="font-size: x-large;"></i></p><p>  @php
                            echo $abb->mdmsg;
                        @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End founder, director message =================-->

<section id="about_trust" class="about_area section_gap">
    <div class="container">
        <div class="row h_blog_item mb-0">
            <div class="col-lg-6 p-0"
                style="background: url('https://demo.themefisher.com/eventre/images/background/pattern-background.jpg');background-size: cover;">
                <div class="h_blog_img pt-5 pl-5 pr-0 pb-0">
                    <img class="img-fluid"
                        src="{{asset('images/'.$abb->trust_img)}}"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-6">

                <div class="h_blog_text">
                    <div class="h_blog_text_inner left right">
                        <h4>About <b class="text-danger">Ganga Devi Trust</b></h4>
                        <p class="text-justify">
                            @php
                           echo  $abb->trust;    
                            @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -10%;background-attachment:fixed"><path fill="#002347" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,224C672,235,768,213,864,197.3C960,181,1056,171,1152,186.7C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
@endforeach
    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top title-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">Affiliation From</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="single_feature">
                        <div class="icon text-center"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Himalayan-University.png"
                                alt="" class="w-75"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="single_feature">
                        <div class="icon text-center"><img src="frontend/style/img/affiliation/global_university.png"
                                alt="" class="w-75"></div>

                    </div>
                </div>
                <div class="col">
                    <div class="single_feature">
                        <div class="icon text-center"><img src="frontend/style/img/affiliation/sikkim_university.jpg"
                                alt="" class="w-75"></div>

                    </div>
                </div>
                <div class="col">
                    <div class="single_feature">
                        <div class="icon text-center"><img
                                src="https://upload.wikimedia.org/wikipedia/en/f/f1/Capital_University%2C_Jharkhand_logo.png"
                                alt="" class="w-75"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Student say about us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="testi_slider owl-carousel">
                    @foreach ($feedback as $feeds)
                        <div class="testi_item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <img src="{{ asset('images/' . $feeds->images) }}" alt="" />
                                </div>
                                <div class="col-lg-8">
                                    <div class="testi_text">
                                        <h4>{{ $feeds->Name }}</h4>
                                        <p>
                                            {{ $feeds->message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

    <!--================ Start footer Area  =================-->
    {{-- @include('frontend.include.footer') --}}
@endsection
