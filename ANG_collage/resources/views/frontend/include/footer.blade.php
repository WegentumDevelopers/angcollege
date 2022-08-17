<style>
    /* footer .single-footer-widget .social-links li a img {
         
        cursor: pointer;
        color: #fff;
        background: rgb(3, 63, 104);
    } */
</style>
@foreach($setting as $data)
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 single-footer-widget m-auto">
               <img src="{{asset('setting_img/'.$data->logo)}}" style="width: 50%;height:auto;margin:auto;" alt="">
               <h4 class="mt-3 mb-0">About</h4>
               <p class="text-left mt-0 p-0 ">{{$data->f_about}}</p>
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('labs') }}">Labs</a></li>
                    <li><a href="{{ route('library') }}">Library</a></li>
                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 single-footer-widget">
                <h4>Affiliation From </h4>
                <ul>
                    <li><a href="https://monad.edu.in/">Monad University</a></li>
                    <li><a href="https://sug.ac.in/">Shobhit University</a></li>
                    <li><a href="https://mgkvp.ac.in/">MGKVP</a></li>
                    
                    <li><a href="http://bimup.org/">Board Of Ayurvedic and Unani Tibbi Systems Of Medicines</a></li>
                </ul>
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap">

                    <form action="{{ route('subscribe_store') }}" method="POST" class="form-inline">
                        @csrf
                        <input class="form-control" name="email" placeholder="Your Email Address" required
                            type="email" />
                        <button type="submit" class="click-btn btn btn-default">
                            <span>Subscribe</span>
                        </button>
                    </form>
                </div>
                <ul class="social-links d-flex mt-4 " style="gap: 10px;">
                    
                    @if ($data->facebook_link != '')
                    <li class="rounded" style="padding: 8px;background:#fff; "><a 
                            href="{{$data->facebook_link}}"><img src="{{asset('frontend/style/img/facebook.png')}}" style="width: 25px;"     alt=""></a></li>
                            @endif
                            @if ($data->twitter_link != '')
                            <li class="rounded" style="padding: 8px;background:#fff; "><a 
                            href="{{$data->twitter_link}}"><img src="{{asset('frontend/style/img/twitter.png')}}" style="width: 25px;" alt=""></a></li>
                            @endif
                            @if ($data->google_link != '')
                    <li class="rounded" style="padding: 8px;background:#fff; "><a 
                            href="{{$data->google_link}}"><img src="{{asset('frontend/style/img/google-plus.png')}}" style="width: 25px;" alt=""></a></li>
                            @endif
                            @if ($data->pinterest_link != '')
                            <li class="rounded" style="padding: 8px;background:#fff; "><a 
                                    href="{{$data->pinterest_link}}"><img src="{{asset('frontend/style/img/pinterest.png')}}" style="width: 25px;" alt=""></a></li>
                                    @endif
                            @if ($data->linkedin_link != '')
                    <li class="rounded" style="padding: 8px;background:#fff; "><a 
                            href="{{$data->linkedin_link}}"><img src="{{asset('frontend/style/img/linkedin.png')}}" style="width: 25px;" alt=""></a></li>
                            @endif
                           
                </ul>
            </div>
        </div>
        <!-- Modal for subscribe us  -->
        <div class="modal fade" id="contactModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label=""><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="thank-you-pop text-center">
                            <img src="{{ asset('frontend/style/img/elements/subscribe.png') }}" alt=""
                                class="w-100">
                            <h1>Thank You!</h1>
                            <p>Your submission is received and we will contact you soon!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endforeach
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdn.usebootstrap.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- <script src="frontend/style/js/owl-carousel-thumb.min.js"></script> --}}
<!--gmaps Js-->
<script src="../frontend/style/js/theme.js"></script>
<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
        });


        return false;
    });
</script>
</body>
{{-- @endforeach --}}

</html>
