@php
use App\Models\Course;    
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon"
        href="https://content3.jdmagicbox.com/comp/varanasi/l7/0542px542.x542.120627103653.i7l7/catalogue/ang-ideal-group-of-institutions-babatpur-varanasi-colleges-mbfopsya4n.jpg"
        type="image/png" />
    <title>ANG IDEAL GROUP OF INSTITUTION</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../frontend/style/css/bootstrap.css" />
    <link rel="stylesheet" href="../frontend/style/css/flaticon.css" />
    <link rel="stylesheet" href="../frontend/style/css/themify-icons.css" />
    <link rel="stylesheet" href="../frontend/style/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main css -->
    <link rel="stylesheet" href="../frontend/style/css/style.css" />
</head>

<body>
    <style>
        .header_area .navbar {
            padding: 0px;
        }

        .navbar {
            padding: 0px;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu a::after {
            transform: rotate(-90deg);
            position: absolute;
            right: 6px;
            top: .8em;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
        }
    </style>
@foreach ($setting as $data)
    

    <header class="header_area p-0 m-0">
        <div class="main_menu">
            <div class="row p-0 px-4 bg-light">
                <div class="col-3 align-items-center justify-content-left  d-flex order-2 order-md-1">
                    <a class="navbar-brand logo_h" href="{{ route('home') }}"><img
                            src="{{asset('setting_img/' . $data->logo)}}"
                            alt="" class="w-100" /></a>
                </div>
                <div class="col-9 p-0 m-0 align-items-center d-flex order-md-12">
                    <div class="main_title  text-left m-0 p-0 d-none d-sm-block">
                        <h1 class=" m-0 p-0">{{$data->company_name}}</h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-sm-0"
                style="background-color: #002347;line-height:30px;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link" id="home" href="{{ route('home') }}">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="about" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{route('about')}}#founder">Founder Message</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{route('about')}}#director">Director Message</a></li>
                                    {{-- <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="#">MD Message</a></li> --}}
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{route('about')}}#about">About Ideal Education</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="{{route('about')}}#about_trust">About Ganga Devi Trust </a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="course" href="#"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    courses
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
@php

function course_count($p){
$c1=Course::where('parent_course',$p)->get();
return count($c1);
}

 function course($p){
$c1=Course::where('parent_course',$p)->get();
foreach ($c1 as $cc) {
    if(course_count($cc->c_name)>0){
        @endphp 
    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">{{$cc->c_name}}</a>
                                            <ul class="dropdown-menu">
                                              @php
                                                course($cc->c_name);
                                                @endphp
                                                </ul>

                                    </li>
                                    <div class="dropdown-divider"></div>
    @php  
    }else{
    @endphp 
    <li><a class="dropdown-item" href="/course/{{$cc->id}}">{{$cc->c_name}}</a></li>
    @php
                                }
}
 }   
 course("courses");
@endphp
                                    {{-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Engineering Courses</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('polytechnic')}}">Polytechnic/Diploma in
                                                    Engineering</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="{{route('Btech')}}">B.Tech</a></li>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider"></div> --}}
                                    {{-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Medical Courses</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                                    href="#">Pharmacy</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{route('dpharma_al')}}">D. Pharma(Al)</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a class="dropdown-item" href="{{route('dpharma_ay')}}">D. Pharma(Ay)</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                                    href="#">Nursing</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{route('gnm')}}">GNM</a></li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                                    href="#">Nutropathy</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{route('dnys')}}">DNYS</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Computer Scienses</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('bca')}}">BCA</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a class="dropdown-item" href="{{route('mca')}}">MCA</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Management Courses</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('bba')}}">BBA</a></li>
                                            <div class="dropdown-divider"></div>

                                            <li><a class="dropdown-item" href="{{route('mba')}}">MBA(Marketing, HR,
                                                    Finance)</a>
                                            </li>
                                            <div class="dropdown-divider"></div>

                                            <li><a class="dropdown-item" href="{{route('mcom')}}">M.Com</a></li>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider"></div>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"
                                            href="#">Law Course</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('llb')}}">LLB</a></li>
                                            <div class="dropdown-divider"></div>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider"></div> --}}
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="lab" href="{{ route('labs') }}">Labs </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="library" href="{{ route('library') }}">Library</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="blogs" href="{{ route('blogs') }}">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
@endforeach