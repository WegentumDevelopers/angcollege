<!-- Side-Nav-->
<style>
    .fixed .main-header-top, .fixed .main-sidebar, .fixed .left-side {
    position: absolute;
}
.main-sidebar .sidebar ul li a:hover{
background-color:#2c3165; 
color: #fff;
}
</style>
<aside class="main-sidebar hidden-print">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="{{ route('dash') }}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('ourteam.index') }}"><i
                        class="fa-solid fa-people-group"></i><span>
                        Our Team</span></a></li> --}}
            <li class="treeview"><a class="waves-effect waves-dark" href=" /admin/about_us/1/edit"><i
                        class="fa-solid fa-person-chalkboard"></i><span>
                         Key People</span></a></li>
                         <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('course.index') }}"><i class="fa-solid fa-book-open"></i><span>
                            Courses</span></a></li>
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('property.index') }}"><i
                        class="fa-solid fa-building-wheat"></i><span>
                        Our property</span></a></li> --}}
                        {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('resume.list') }}"><i class="fa-solid fa-file"></i><span>
                            All Resumes</span></a></li> --}}
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('partner.index') }}"><i
                        class="fa-solid fa-handshake"></i><span>
                        Our partners</span></a></li> --}}
            <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('enquiries.index') }}"><i
                        class="fa-solid fa-calendar-check"></i><span>
                        Enquiry</span></a></li>
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('expert.index') }}"><i
                        class="fa-solid fa-user-graduate"></i><span>
                        Our Experts</span></a></li> --}}
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('agent.index') }}"><i
                        class="fa-solid fa-people-carry-box"></i><span>
                        Our Agents</span></a></li> --}}
            <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('subscribe.index') }}"><i
                        class="fa-solid fa-user-check"></i><span>
                        Subscribe</span></a></li>
            <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('testimonial.index') }}"><i
                        class="fa-solid fa-message"></i><span>
                        Feedbacks</span></a></li>
            {{-- <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('service.index') }}"><i
                        class="fa-brands fa-servicestack"></i><span>
                        Services</span></a></li> --}}
            <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('blog.list') }}"><i
                        class="fa-solid fa-blog"></i><span>
                        Blog</span></a></li>
            <li class="treeview"><a class="waves-effect waves-dark" href="{{ route('gallery.index') }}"><i
                        class="fa-solid fa-camera"></i><span>
                        Gallery</span></a></li>       
            <li class="treeview"><a class="waves-effect waves-dark" href="{{'/admin/setting/1/edit'}}"><i
                        class="fa-solid fa-screwdriver-wrench"></i><span>
                        Settings </span> </a>
            </li>
            
        </ul>
    </section>
</aside>
