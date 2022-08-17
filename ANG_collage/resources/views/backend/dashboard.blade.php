
      @include('backend.include.header')

@php
 $blog = \App\Models\Blog::where('delete_status',0)->count();   
 $feedback = \App\Models\Feedback::where('delete_status',0)->count();   
 $gallery = \App\Models\Gallery::where('delete_status',0)->count();   
 $enquiry = \App\Models\Enquiry::where('delete_status',0)->count();   
 $duplexsale = \App\Models\Contactsale::where('status',1)->count();   
 $plotsale = \App\Models\Plotmodel::where('status',1)->count();   
@endphp
     
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Blogs</span>
                     <h2 class="dashboard-total-products">{{$blog}}</h2>
                     <span class="label label-warning">Blog</span>Post Today
                     <div class="side-box">
                        <i class="fa-solid text-warning-color fa-blog"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Feedbacks</span>
                     <h2 class="dashboard-total-products">{{$feedback}}</h2>
                     <span class="label label-primary">Feedbacks</span>Today Feedback
                     <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Gallery</span>
                     <h2 class="dashboard-total-products">{{$gallery}}</h2>
                     <span class="label label-success">Gallery</span>Views Photos
                     <div class="side-box">
                        <i class="fa-solid text-success-color fa-camera"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Enquiry</span>
                     <h2 class="dashboard-total-products">{{$enquiry}}</h2>
                     <span class="label label-danger">Enquiry</span>Reviews People
                     <div class="side-box">
                        <i class="fa-solid text-danger-color fa-calendar-check"></i>
                     </div>
                  </div>
               </div>
               {{-- <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Enquiry List For Duplex/Villa Sale</span>
                     <h2 class="dashboard-total-products">{{$duplexsale}}</h2>
                     <div class="side-box">
                        <i class="fa-solid text-danger-color fa-calendar-check"></i>
                     </div>
                     <div class="bg-success p-0 text-center text-light">
                     <a href="{{route('duplexs.index')}}" class="text-cente " style="color: #fff;">more info</a>
                     </div>
                  </div>
               </div> --}}
               {{-- <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Enquiry List For Plots Sale</span>
                     <h2 class="dashboard-total-products">{{$plotsale}}</h2>
                     <div class="side-box">
                        <i class="fa-solid text-danger-color fa-calendar-check"></i>
                     </div>
                     <div class="bg-danger p-0 text-center text-light">
                     <a href="{{route('plots.index')}}" class="text-cente " style="color: #fff;">more info</a>
                     </div>
                  </div>
               </div> --}}
            </div>
            
            
            
               
               @include('backend.include.footer')