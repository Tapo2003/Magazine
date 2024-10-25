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
                  <div class="col-sm-12 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Delete</h4>
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
                                    <th scope="col">Date</th> 
                                    <th scope="col">Action</th> 
                                 </tr>
                              </thead>
                              
                                <tbody 
                                id='tblAccount'>
                                <tr>
                                <td>{{$row->fullname}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{date("jS M, Y",strtotime($row->created_at))}}</td>
                                <td><div class="form-row">
                                    <form action="" method="post">
                                    @csrf 
                                    <div class="col">
                                        <button  class="btn btn-primary" id = 
                                        "submit" name = "submit" >Delete</button>
                                        <!-- <input type="submit" value = "post"> -->    
                                    </div> 
                                    </form>                                  
                                </div></td>
                                </tr>
                            
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

            function populateBookTable(){
               
                $.get('getFemaleProduct.php').done(function(feedback){
                  //   alert(feedback);
                    if(feedback == 0){
                        // do nothing
                    }else{
                        $("#tblAccount").html(feedback);
                    }
                });
            }
            function viewAccount(getThis){

               var pageName = $("#pagename").val();
               var productId = getThis.id;
               var productId = 'productid='+ productId + '-' + pageName;
               var productName = $("#p_name").val();
               var brandName = $("brand_name").val();
               var productPrice = $("#p_price").val();
               var productCategory = $("p_category").val();
               var productDescription = $("#p_description").val();
              
            
                $.post('getProductId.php', productId).done(function(feedback){
                  feedback = $.parseJSON(feedback);
                  if(feedback !=0 ){
                     // check if user image exist 
                     var urlToFile = 'female products/' + feedback['productid'] + '.jpg';

                     var xhr = new XMLHttpRequest();
                     xhr.open('HEAD', urlToFile, false);
                     xhr.send();
                     if(xhr.status != 404){
               
                        $("#userimage").attr('src', urlToFile + `?v=${new Date().getTime()}`)
                     }else{
                        $("#userimage").attr('src', 'assets/images/user/1.jpg' + `?v=${new Date().getTime()}`);
                     }             
                     $("#p_name").val(feedback.p_name);
                     $("#brand_name").val(feedback.brand_name);
                     $("#p_price").val(feedback.p_price);
                     $("#p_category").val(feedback.p_category);
                     $("#p_description").val(feedback.p_description);
                  }else{   
                     $("#p_name").val("");
                     $("#brand_name").val("");
                     $("#p_price").val("");
                     $("p_category").val("");
                     $("p_description").val("");
                              
                  }
               });
            }

       
      </script>
   </body>

</html>