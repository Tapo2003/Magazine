<!Doctype html>
<html lang="en">
   <head>
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
   <body>
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
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Admin Users</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!-- <p>The <code>.table </code> class adds basic styling to a table.</p> -->
                           <table class="table">
                              <thead>
                                 <tr>
                                    <!-- <th scope="col">#</th> -->
                                    <th scope="col">Fullname</th>
                                    <th scope = "col">Email</th>
                                    <th scope = "col">Date</th>
                                    <th scope="col">Action</th> 
                                 </tr>
                              </thead>
                              
                              <tbody 
                              id='tblAccount'>
                              @if($rows)
                              @foreach($rows as $row)
                                 <tr>
                                    <td>{{$row->fullname}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{date("jS M, Y",strtotime($row->created_at))}}</td>
                                    <td><button type='button' class='btn btn-primary' style = 'width:60px; height:30px'><a href="{{url('users-admin/edit/'.$row->id)}}" style = "color:white">Edit</a></button>
                                    <button type='button' class='btn btn-danger' style = 'width:60px; height:30px'><a href="{{url('users-admin/delete/'.$row->id)}}" style = 'color:white'>Delete</a></button></td>
                                 </tr>
                              @endforeach
                              @endif
                                
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
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
      <script>
            $(document).ready(function(){
               populateBookTable();
            });

      </script>
   </body>

</html>