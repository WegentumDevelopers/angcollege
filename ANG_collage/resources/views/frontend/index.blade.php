<!--================ Start Header Menu Area =================-->

{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')
<style>
    #content{
        width: 100%!important;
    }
    #home{
        color: yellow!important;
    }
</style>
<!--================ End Header Menu Area =================-->
@foreach($setting as $data)


<!--================ Start Home Banner Area =================-->
<section class="header-banner">
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  order-md-12 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="max-height:80vh;">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1543505298-b8be9b52a21a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="First slide">
                    </div>
                    <div class="carousel-item" style="max-height:80vh;">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item" style="max-height:80vh;">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1492538368677-f6e0afe31dcc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="col-12" style="width: 40%;float:right;">
    <div class="register_form1">
        <h3 class="mb-2"> Get in Touch</h3>
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 form_group">
                    <input name="name" placeholder="Your Name" required="" type="text">
                    <input name="contact" placeholder="Your Phone Number" required="" type="tel">
                    <input name="email" placeholder="Your Email Address" required=""
                        type="email">
                    <textarea name="msg" placeholder="Send us your query" required="" rows="3"></textarea>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn primary-btn" data-toggle="modal"
                        href="#contactModal">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<!--================ End Home Banner Area =================-->
<!--================ Start About us Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="row h_blog_item">
            <div class="col-lg-6 p-0"
                style="background: url('https://demo.themefisher.com/eventre/images/background/pattern-background.jpg');background-size: cover;">
                <div class="h_blog_img pt-5 pl-5 pr-0 pb-0">
                    <img class="img-fluid"
                        src="https://images.unsplash.com/photo-1532294220147-279399e4e00f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="" />
                </div>
            </div>
            <div class="col-lg-6">

                <div class="h_blog_text">
                    <div class="h_blog_text_inner left right">
                        <h4>About <b class="text-danger">ANG Ideal Group of Institutions</b></h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus alias exercitationem ad
                            iste deleniti ex at maxime. Praesentium commodi molestias omnis ut quisquam, animi magnam
                            accusamus, recusandae, architecto reiciendis repellendus.
                        </p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officiis, cumque voluptas
                            unde placeat culpa omnis dolor aperiam ad illum dolore odit delectus ullam atque doloremque?
                            Totam quaerat placeat obcaecati.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End About Area =================-->
<!--================ Start Registration Area =================-->
<section>
    <div class="py-5 registration_area">
        <div class="container">
            <div class="row">
                <div
                    class="col-xl-3 col-lg-3 col-md-3 col-sm-12 my-1 align-items-center justify-content-center d-flex " style="background: #fff;padding
                    10px" >
                    <div class="row">
                        <div class="col-12">
                            <div class="main_title m-0 mb-5 pt-5 pt-md-1">
                                <h3 class="pt-4">Approval & Accredation</h3>
                            </div>
                        </div>
                        <a href="https://monad.edu.in/" class="col-6 m-auto">
                            <div class="single_feature">
                                <div class="icon text-center"><img
                                        src="frontend/style/img/affiliation/1_university.png"
                                        alt="" class="w-100"></div>
                            </div>
                        </a>
                        <a href="https://mgkvp.ac.in/" class="col-6">
                            <div class="single_feature" >
                                <div class="icon text-center"><img
                                        src="frontend/style/img/affiliation/4_university.png" alt=""
                                        class="w-100"></div>

                            </div>
                        </a>
                        <a href="https://sug.ac.in/" class="col-6">
                            <div class="single_feature px-1" >
                                <div class="icon text-center"><img style="background: #304258;"
                                        src="frontend/style/img/affiliation/3_university.png" alt=""
                                        class="w-100"></div>

                            </div>
                        </a>
                        <a href="http://bimup.org/" class="col-6">
                            <div class="single_feature px-1">
                                <div class="icon text-center"><img
                                        src="frontend/style/img/affiliation/2_university.png"
                                        alt="" class="w-100"></div>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-9 col-md-9 col-lg-9 my-1">
                    <div class="row   overlay">
                        <div class="col-lg-6">
                            <div class="blocks_images p-2 shadow-lg border">
                                <img class="w-100"
                                    src="frontend/style/img/block1.jpeg"
                                    alt="">
                            </div>
                            <h3 class="text-center bg-white p-2">Block 1</h3>
                        </div>
                        <div class="col-lg-6">
                        <div class="row">
                            <div class="blocks_images p-2 shadow-lg border">
                                <img class="w-100"
                                    src="frontend/style/img/block2.jpeg"
                                    alt="">
                            </div>
                            <h3 class="text-center w-100 bg-white p-2">Block 2</h3>
                        </div>
                        <div class="row">
                            <div class="blocks_images p-2 shadow-lg border">
                                <img class="w-100"
                                    src="frontend/style/img/block3.jpeg"
                                    alt="">
                            </div>
                            <h3 class="text-center w-100 bg-white p-2">Block 3</h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Registration Area =================-->


<!--================ Start Popular Courses Area =================-->
<section>
    <div class="popular_courses section_gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_title">
                        <h2 class="">Our Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-baseline">
                
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                            <div class="card shadow-lg border-0">
                                <div class="card-body text-center">
                                    <img src="frontend/style/img/courses/engineer.jpg" class="w-100 mb-4">
                                    <h4 class=""><b>Engineering</b></h4>
                                    <h5 class="mb-5 text-info"><b class="text-info">Polytechnic / B.Tech</b></h5>

                                        <ul class="text-left text-muted p-0" style="list-style: none;">
                                            <li class="bg-light py-2 my-2 px-1">
                                                <h6 class=" text-left"><b>Mechanical Engineering</b></h6>
                                            </li>
                                            <li class="bg-light py-2 my-2 px-1">
                                                <h6 class=" text-left"><b>Electrical Engineering</b></h6>
                                            </li>

                                            <li class="bg-light py-2 my-2 px-1">
                                                <h6 class=" text-left"><b>Civil Engineering</b></h6>
                                            </li>

                                            <li class="bg-light py-2 my-2 px-1">
                                                <h6 class=" text-left"><b>Electrical & Electronics Engineering</b>
                                                </h6>
                                            </li>

                                            <li class="bg-light py-2 my-2 px-1">
                                                <h6 class=" text-left"><b>Computer Science Engineering</b></h6>
                                            </li><li class="py-2 my-2 px-1">
                                    <h6 class=" text-left"><b></b></h6>
                                </li>
                                            
                                          

                                        </ul>

                                </div>
                            </div>
                        </div>
                   
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <img src="frontend/style/img/courses/medical.jpg" class="w-100 mb-4">
                            <h4 class=""><b>Medical</b></h4>
                            <h5 class="mb-5 text-info"><b class="text-info">Pharmacy / Nursing</b></h5>
                                <ul class="text-left text-muted p-0" style="list-style: none;">
                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>D. Pharma</b></h6>
                                    </li>
                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>D. Pharma(AY)</b></h6>
                                    </li>

                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>G.N.M</b></h6>
                                    </li>

                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>DNYS</b></h6>
                                    </li>
                                  
<li class="py-2 my-2 px-1">
                                    <h6 class=" text-left"><b></b></h6>
                                </li><li class="py-2 my-2 px-1">
                                    <h6 class=" text-left"><b></b></h6>
                                </li><li class="py-2 my-2 px-1">
                                    <h6 class=" text-left"><b></b></h6>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <img src="https://i.pinimg.com/736x/37/52/84/37528409ff9c3e3f9d97f365956dc135.jpg" style="width:90%;"
                                class=" mb-3">
                            <h4 class=""><b>Management</b></h4>
                            
                            <h5 class="mb-5 text-info"><b class="text-info"> &nbsp; </b></h5>
                            <ul class="text-left text-muted p-0" style="list-style: none;">
                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>MBA</b></h6>
                                </li>
                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>BBA</b></h6>
                                </li>

                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>B.Com</b></h6>
                                </li>

                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>CHR</b></h6>
                                </li>

                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>Marketing</b></h6>
                                </li>

                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>Finance</b></h6>
                                </li>
                               

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="row">
                        <div class="card shadow-lg border-0">
                            <div class="card-body text-center">
                                <img src="https://img.freepik.com/free-vector/online-education-elearning-home-school-teacher-teaching-students-computer-vector-illustration_327176-364.jpg?w=360"
                                    class="w-100 mb-3">
                                <h4 class="mb-5"><b>Computer Science</b></h4>
                                <ul class="text-left text-muted p-0" style="list-style: none;">
                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>BCA</b></h6>
                                    </li>
                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>MCA</b></h6>
                                    </li>

                                   

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="card shadow-lg border-0">
                            <div class="card-body text-center mt-3">
                                <img src="img/courses/law.jpg" class="w-100 mb-3">
                                <h4 class="mb-5"><b>Law</b></h4>
                                <ul class="text-left text-muted p-0" style="list-style: none;">
                                    <li class="bg-light py-2 my-2 px-1">
                                        <h6 class=" text-left"><b>LLB</b></h6>
                                    </li>
                                    <li class="bg-warning py-2 my-2 px-1 border border-circle">
                                        <h6 class=" text-left text-center"><b>View All Courses</b></h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center">
                            <img src="frontend/style/img/courses/law.jpg" class="w-100 mb-3">
                            <h4 class="mb-5"><b>Law</b></h4>
                            <ul class="text-left text-muted p-0" style="list-style: none;">
                                <li class="bg-light py-2 my-2 px-1">
                                    <h6 class=" text-left"><b>LLB</b></h6>
                                </li>
                                <li class="py-2 my-2 px-1">
                                    <h6 class=" text-left"><b></b></h6>
                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Popular Courses Area =================-->
@foreach($about as $abb)
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
@endforeach
<!--================ Start Gallery =================-->
<section class="section_gap pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_title">
                    <h2 class="">Our Labs & Library</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex  flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            @foreach($gallery as $image)
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="row lab_images d-flex mb-2 " style="gap: 1px;float:left;">
                    <div class="col-12 col-md-12 col-lg-12 d-flex">
                        <img src="{{asset('galleries/'.$image->images)}}"
                            data-target="#indicators" class="rounded thumbnail" data-slide-to="0" alt="" />
                    </div>
                </div>
            </div>
          @endforeach

        </div>
        <!-- Modal -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            @php
                            $i = 'class="active"';
                            $inc = 0;
                        @endphp
                        @foreach ($gallery as $image)
                            <li data-target="#indicators" data-slide-to="{{ $inc }}"  {{ $i }}>
                            </li>
                            @php
                                $i='';
                                $inc++;
                            @endphp
                        @endforeach
                            {{-- <li data-target="#indicators" data-slide-to="0" class="active"></li>
                            <li data-target="#indicators" data-slide-to="1"></li>
                            <li data-target="#indicators" data-slide-to="2"></li>
                            <li data-target="#indicators" data-slide-to="3"></li>
                            <li data-target="#indicators" data-slide-to="4"></li>
                            <li data-target="#indicators" data-slide-to="5"></li> --}}
                        </ol>
                        <div class="carousel-inner">

                            @php
                            $i = 'active';
                        @endphp
                        @foreach ($gallery as $image)
                                <div class="carousel-item   {{$i}}">

                                    <img class="d-block w-100" src="{{asset('galleries/'.$image->images)}}"
                                        alt="First slide">
                                </div>
                            </li>
                            @php
                                $i='';
                            @endphp
                        @endforeach
                            {{-- <div class="carousel-item active">

                                <img class="d-block w-100" src="https://source.unsplash.com/random/200"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/201"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/202"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/203"
                                    alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/204"
                                    alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/205"
                                    alt="Sixth slide">
                            </div> --}}
                        </div>
                        <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .close {
            font-size: 1.5rem;
        }

        .lab_images .col-12 img {
            opacity: 0.7;
            cursor: pointer;
            width: 100%;
        }

        .lab_images .col-12 img:hover {
            opacity: 1;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</section>
<!--================ End Gallery =================-->

<!--================ Start founder, director message =================-->
<section class="section_gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_title">
                </div>
            </div>
        </div>
        <div class="row align-items-center overlay">
            <div class="col-12">
                <div class="row p-0 m-0">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="main_title text-left">
                            <h2 class="text-dark">Training & Placements</h2>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Repudiandae a enim sunt nulla incidunt repellendus fugiat quod nihil placeat deleniti
                                cum saepe eveniet aspernatur voluptatum explicabo doloremque, laudantium accusamus
                                esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo vitae hic, expedita
                                sed assumenda aliquid ipsa mollitia voluptate quia odio dignissimos nulla dolorem quo
                                fugiat exercitationem nostrum necessitatibus
                                enim tempore!Lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore qui
                                corrupti dolor. Expedita cumque molestiae laborum non omnis, tempora cupiditate
                                consectetur commodi dolorem consequuntur deleniti
                                asperiores rem tempore, ratione id.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"
                        style="background: url('https://demo.themefisher.com/eventre/images/background/pattern-background.jpg');background-size:cover">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <img class="w-100 p-2"
                                    src="data:image/jpeg;base64,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"
                                    alt="">
                                <img class="w-100 p-2"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkcnpUrlBXZkZJ52qAmV5VdxKcP0fK4tbEXA&usqp=CAU"
                                    alt="">

                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <img class="w-100 p-2"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTANT5xdKTy_iD6lpLj9SbTxgjT4i9zC7KSGg&usqp=CAU"
                                    alt="">
                                <img class="w-100 p-2"
                                    src="https://www.uscreen.tv/wp-content/uploads/2018/05/online-employee-training-program.jpg"
                                    alt="">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End founder, director message =================-->


<div class="py-5 registration_area section_gap">
    <div class="container">
        <div class="row align-items-center overlay">
            <div class="col-lg-7">
                <iframe src="{{$data->g_map}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            <!--Get in touch form  Model Popup starts-->
            <!-- <a class="btn btn-primary" data-toggle="modal" href="#contactModal">open Popup</a> -->
            <!-- <div class="modal fade" id="contactModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="thank-you-pop text-center">
                                    <img src="img/elements/send.jpg" alt="" class="w-75">
                                    <h1>Thank You!</h1>
                                    <p>Your submission is received and we will contact you soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <div class="modal fade" id="contactModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-label=""><span>×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="thank-you-pop text-center">
                                <img src="frontend/style/img/elements/subscribe.png" alt="" class="w-100">
                                <h1>Thank You!</h1>
                                <p>Your submission is received and we will contact you soon!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Model Popup ends-->

            <div class="col-lg-4 offset-lg-1">
                <div class="row clock_sec clockdiv" id="clockdiv" >
                    <div class="col-lg-12">
                        <ul style="list-style: none; padding-left:0px;">
                            <h2 class="text-light text-center">Get in Touch</h2>
                            <a href="#" style="color:white;">
                                <li class="align-items-center d-flex"><i class="fa-solid fa-location-dot m-3"
                                        style="font-size:  30px;"></i>Saraytakki, Babatpur, Varanasi - 221006, Near Airport Lal
                                    Bhahdur Shastri, Saraitakki </li>
                            </a>
                            <a href="tel:+919453775644" style="color:white;">
                                <li class="align-items-center d-flex"><i class="fas fa-headset m-3"
                                        style="font-size:  30px;"></i>{{$data->contact_no}}, &nbsp; {{$data->contact_optional}}</li>
                            </a>
                            <a href="mailto:angidealcalcollege@gmail.com" style="color:white;">
                                <li class="align-items-center d-flex"><i class="fas fa-envelope m-3"
                                        style="font-size:  30px;"></i>{{$data->email}}</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <img src="{{asset('images/'.$feeds->images)}}" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>{{$feeds->Name}}</h4>
                                <p>
                                    {{$feeds->message}}
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
@endforeach
<!--================ End Testimonial Area =================-->


<!--================ Start footer Area  =================-->
{{-- @include('frontend.include.footer') --}}
@endsection
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
