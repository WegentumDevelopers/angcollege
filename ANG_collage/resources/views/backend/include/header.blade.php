<!DOCTYPE html>
<html lang="en">

<head>
   <title>ANG Ideal Group dashboard</title>
 

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon"> 
   <link rel="icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
   
<!-- Bootstrap toggle js and css cdn-->
 <!-- summernote -->
<link rel="stylesheet" href="{{asset ('backend/plugins/summernote/summernote-bs4.min.css')}}">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
   <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{{asset('backend/assets/css/svg-weather.css')}}" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/main.css')}}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">

</head>
<style>
   .sidebar-menu>li.active>a {
    color: #fff;
    font-weight: 600;
    background: #2c3165;
}
/* .bgstyle{
   background-image: url('http://kridhadev.com/new/images/logo/trans-logo-rect.png');
   opacity: 0.9;
} */
</style>
<body class="sidebar-mini fixed bgstyle">
   {{-- <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div> --}}
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print" href="#top" style="background-color: #ffffffba;">
         {{-- <a href="index.html" class="logo"><img class="img-fluid able-logo" src="{{asset('frontend/img/ad_logo.png')}}" alt="Theme-logo"></a> --}}
         <a href="{{route('dash')}}}" class="logo"><h4 style="padding:0px;color:#000;">ANG <span style="color:#4778FF ">IDEAL</span> <span style="color: #4D68FE">COLLEGE</span></h4></a>
         <nav class="navbar navbar-static-top" style="background-color:#2c3165;">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
              
            </ul>
            <!-- Navbar Right Menu-->
            

               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                  
                  <!-- chat dropdown -->
                  
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        {{-- <span><img class="img-circle " src="{{asset('backend/assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span> --}}
                        <span>{{Auth::user()->name}} <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="{{'/admin/setting/1/edit'}}"><i class="icon-settings"></i> Settings</a></li>
                       
                        <li><a  href="/logout"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{-- {{ __('Logout') }} --}}
                            <i class="icon-logout"></i> Logout
                        </a>

                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form></li>

                     </ul>
                  </li>
               </ul>

               <!-- search -->
              
               <!-- search end -->
            </div>
         </nav>
      </header>
      @include('backend.include.sidebar')