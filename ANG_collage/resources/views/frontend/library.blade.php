{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')
<style>
    #library{
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
                <h2>Our Library</h2>
                <div class="page_link">
                  <a href="{{route('home')}}">Home</a>
                  <a href="#">Our Library</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item align-content-center justify-content-center d-flex">
                <div class="col-3 p-0">
                    <div class="h_blog_img pt-5 pl-5 pr-0 pb-0">
                        <img class="img-fluid w-100" src="frontend/style/img/elements/digital-library.png" alt="" />
                    </div>
                </div>
                <div class="col-9">
                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right ">
                            <!-- <h4>About <b class="text-danger">ANG Ideal Group of Institutions</b></h4> -->
                            <p class="text-justify">
                            <i class="text-dark fa-solid fa-quote-left" style="font-size: xx-large;"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus alias exercitationem ad iste deleniti ex at maxime. Praesentium commodi molestias omnis ut quisquam, animi magnam accusamus, recusandae, architecto reiciendis repellendus.
                            </p>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat officiis, cumque voluptas unde placeat culpa omnis dolor aperiam ad illum dolore odit delectus ullam atque doloremque? Totam quaerat placeat obcaecati.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->

    <section class="section_gap pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_title">
                        <h2 class="">Our Library</h2>
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
            <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="carousel-item  {{ $i }}">

                                        <img class="d-block w-100" src="{{asset('galleries/'.$image->images)}}"
                                            alt="First slide">
                                    </div>
                                </li>
                                @php
                                    $i='';
                                @endphp
                            @endforeach

                                {{-- <div class="carousel-item active">

                                    <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://source.unsplash.com/random/201" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://source.unsplash.com/random/202" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://source.unsplash.com/random/203" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://source.unsplash.com/random/204" alt="Fifth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://source.unsplash.com/random/205" alt="Sixth slide">
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
                margin: 2rem;
                width: 100%;
            }
            
            .lab_images .col-12 img:hover {
                opacity: 1;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    </section>
    <!--================ Start footer Area  =================-->
    {{-- @include('frontend.include.footer') --}}
   @endsection
