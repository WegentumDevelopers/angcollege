{{-- @include('frontend.include.header') --}}
@extends('layouts.front_app')
@section('all_content')
<style>
  #contact{
    color: yellow!important;
  }
</style>
    <!--================ End Header Menu Area =================-->
@foreach($setting as $data)
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Contact Us</h2>
                <div class="page_link">
                  <a href="{{route('home')}}">Home</a>
                  <a href="#">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">        
        <div class="row align-items-center overlay">
                <div class="col-lg-6">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <ul style="list-style: none; padding-left:0px;">
                                <h2 class="text-dark my-3">Contact Details</h2>
                                <a href="#" style="color:#212529;">
                                    <li class="align-items-center d-flex"><i class="fa-solid fa-location-dot m-3" style="font-size:  30px;"></i>{{$data->address}} </li>
                                </a>
                                <a href="tel:+919453775644" style="color:#212529;">
                                    <li class="align-items-center d-flex"><i class="fas fa-headset m-3" style="font-size:  30px;"></i>{{$data->contact_no}}, &nbsp; {{$data->contact_optional}}</li>
                                </a>
                                <a href="mailto:angidealcollege@gmail.com" style="color:#212529;">
                                    <li class="align-items-center d-flex"><i class="fas fa-envelope m-3" style="font-size:  30px;"></i>{{$data->email}}</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Get in touch form  Model Popup starts-->
                <!-- <a class="btn btn-primary" data-toggle="modal" href="#contactModal">open Popup</a> -->
                <div class="modal fade" id="contactModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="thank-you-pop text-center">
                                <img src="img/elements/send.jpg" alt="" class="w-75">
                                    <h1>Thank You!</h1>
                                    <!-- <p>For subscribing us!</p> -->
                                    <p>Your submission is received and we will contact you soon!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Model Popup ends-->

                <div class="col-lg-6 ">
                  <div class="register_form">
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
            <div class="col-lg-12">
                <iframe src="{{$data->g_map}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
   
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Thank you</h2>
            <p>Your message is successfully sent...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Sorry !</h2>
            <p>Something went wrong</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!--================End Contact Success and Error message Area =================-->
{{-- @include('frontend.include.footer') --}}
@endsection
