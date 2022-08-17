
</div>
<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->
<div class="fixed-button" id="top">
<a href="#" class="btn btn-md btn-primary">
    <i class="fa-solid fa-up-long"></i>
</a>
</div>
</div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->

<!-- Required Jqurey -->
<script src="{{asset('backend/assets/plugins/Jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/tether/dist/js/tether.min.js')}}"></script>

<!-- Required Fremwork -->
<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Scrollbar JS-->
<script src="{{asset('backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

<!--classic JS-->
<script src="{{asset('backend/assets/plugins/classie/classie.js')}}"></script>

<!-- notification -->
<script src="{{asset('backend/assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

<!-- Sparkline charts -->
<script src="{{asset('backend/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

<!-- Counter js  -->
<script src="{{asset('backend/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/countdown/js/jquery.counterup.js')}}"></script>
<!-- Summernote -->
<script src="{{asset ('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      $('.summernote').summernote()
  
    })
  </script>
<!-- Echart js -->
<script src="{{asset('backend/assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<!-- custom js -->
<script type="text/javascript" src="{{asset('backend/assets/js/main.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/pages/dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/assets/pages/elements.js')}}"></script>
<script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
if ($window.scrollTop() >= 200) {
nav.addClass('active');
}
else {
nav.removeClass('active');
}
});
// $(document).ready(function() {
//   $('#summernote').summernote();
//   $('#summernote1').summernote();
// });
// $(document).ready(function() {
//   $('.summernote').summernote();
// });
</script>
</body>

</html>
