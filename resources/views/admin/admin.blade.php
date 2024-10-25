<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
   <!-- Favicon -->
   <link rel="shortcut icon"   href="{{url('asset/admin/images/favicon.ico')}}"/>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{url('asset/admin/css/bootstrap.min.css')}}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{url('asset/admin/css/typography.css')}}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{url('asset/admin/css/style.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{url('asset/admin/css/responsive.css')}}">

   <link rel="stylesheet" href="{{url('summernote/summernote-lite.min.css')}}">

   </head>
   @auth
    {{Auth::user()->fullname}}
   @endauth
 
   <body class="sidebar-main-active right-column-fixed header-top-bgcolor">
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('admin.sidebar')
         <!-- TOP Nav Bar -->
         @include('admin.topnavbar')
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Invoice Sent</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-Admin Panel-box d-flex align-items-center justify-content-between 
                           mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-inbox-fill"></i></div>
                                 <h2>352</h2>
                              </div>
                              <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Credited From Accounts</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-danger mr-2"><i class="ri-radar-line"></i></div>
                                 <h2>$37k</h2></div>
                               <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>AVG Employee Costs</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-warning mr-2"><i class="ri-price-tag-3-line"></i></div>
                                 <h2>32%</h2></div>
                               <div class="iq-map text-warning font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Average payment delay</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-info mr-2"><i class="ri-refund-line"></i></div>
                                 <h2>27h</h2></div>
                               <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
        
         @include('admin.rightfixedsection')

        <!-- Wrapper END -->
        <!-- Footer -->
         <form action="">
            
         </form>
        <footer class="bg-white iq-footer">
            @include('admin.footer')
        </footer> 
        <script src="{{url('asset/admin/js/jquery.min.js')}}"></script>
        <script src="{{url('asset/admin/js/popper.min.js')}}"></script>
        <script src="{{url('asset/admin/js/bootstrap.min.js')}}"></script>
        <!-- Appear JavaScript -->
        <script src="{{url('asset/admin/js/jquery.appear.js')}}"></script>
        <!-- Countdown JavaScript -->
        <script src="{{url('asset/admin/js/countdown.min.js')}}"></script>
        <!-- Counterup JavaScript -->
        <script src="{{url('asset/admin/js/waypoints.min.js')}}"></script>
        <script src="{{url('asset/admin/js/jquery.counterup.min.js')}}"></script>
        <!-- Wow JavaScript -->
        <script src="{{url('asset/admin/js/wow.min.js')}}"></script>
        <!-- Apexcharts JavaScript -->
        <script src="{{url('asset/admin/js/apexcharts.js')}}"></script>
        <!-- Slick JavaScript -->
        <script src="{{url('asset/admin/js/slick.min.js')}}"></script>
        <!-- Select2 JavaScript -->
        <script src="{{url('asset/admin/js/select2.min.js')}}"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="{{url('asset/admin/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{url('asset/admin/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Smooth Scrollbar JascrollbarvaScript -->
        <script src="{{url('asset/admin/js/smooth-scrollbar.js')}}"></script>
        <!-- lottie JavaScript -->
        <script src="{{url('asset/admin/js/lottie.js')}}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{url('asset/admin/js/chart-custom.js')}}"></script>
        <!-- Custom JavaScript -->
        <script src="{{url('asset/admin/js/custom.js')}}"></script>

        <script src="{{url('summernote/summernote-lite.min.js')}}"></script>
      

<!-- <script src="{{url('asset/js/bootstrap.min.js')}}"></script> -->

    </body>
</html>
