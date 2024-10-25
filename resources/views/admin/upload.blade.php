<!doctype html>
<html lang="en">

<head>
    
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
            <!-- <form action="">
                @csrf
                <textarea name="content" id="summernote"></textarea>
            </form> -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upload News/Articles</h4>
                           </div>
                        </div>
                       
                        <div class="iq-card-body">
                            <?php
                            if(isset($success)){
                                echo '<span style = "color:red;margin-left:400px;font-size:20px">Message Sent Successfully</span>';
                            }else if(isset($errorsending)){
                                echo '<span style = "color:red">Error Sending Message</span>';
                            }
                            ?>
                            
                            <form method="post" enctype ="multipart/form-data">
                                @csrf 
                                <div class="form-row">
                                    <div class="col-md-12"><br>
                                       <label>Title</label>
                                       <input type="text" class="form-control"  name="title" placeholder="Title" value = "{{old('title')}}" autofocus> 
                                       @if($errors)
                                       @error('title')
                                        <span style = "color:red">{{$message}}</span>
                                       @enderror
                                       @endif
                                       <br>             
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12"><br>
                                       <label>Publisher</label>
                                       <input type="text" class="form-control"  name="publisher" placeholder="Publisher" value = "{{old('publisher')}}"> 
                                       @if($errors)
                                       @error('publisher')
                                        <span style = "color:red">{{$message}}</span>
                                       @enderror
                                       @endif
                                       <br>             
                                    </div>
                                </div>
                                <div class="form-row">
                                    <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                    <div class="col-lg-6">
                                        <label>Add Image</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="userfile" name="userfile" onchange="preveiwImage(this)">
                                          <label class="custom-file-label">Choose file</label>
                                        @error('userfile')
                                            <span style = "color:red">{{$message}}</span>
                                        @enderror
                                       </div>
                                    </div>
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="{{url('asset/admin/images/user/1.jpg')}}" class="img-fluid rounded mr-3" alt="user" width="150px" height="70px" >      
                                    </div>
                                </div>

                                <div class="form-group"  style= "margin-top: 20px">
                                 <label for="exampleFormControlSelect1">Select Category</label>
                                 <select class="form-control" name = "category" value = "{{old('category')}}">
                                    <option>{{old('category')}}</option>
                                    <option>Articles</option>
                                    <option>News</option>
                                 </select>
                                @error('category')
                                    <span style = "color:red">{{$message}}</span>
                                @enderror  
                                <br>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description<span style = "color:red"> (optional)</span></label>
                                     <textarea class='form-control' id='summernote' name  = 'content' rows='5'>{{old('content')}}</textarea>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col">
                                        <button  class="btn btn-primary" id = 
                                        "submit" name = "submit" >Submit</button>
                                        
                                    </div>                                   
                               </div>
                           </form>
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
            $(document).ready(function() {
               $('#summernote').summernote({height:400});
            });
        </script>
      <!-- My Custom JavaScript -->
      <script>
    
        //to preview image
        function preveiwImage(getImage)
        {
            var fileType = document.getElementById('userfile').files[0].type;
            
        
            var fileSize = document.getElementById('userfile').files[0].size;
            /*******CONVERT IMAGE FILE TO KILOBYTE*******/
            var fileSize = Math.floor(fileSize/(1024));
            // alert(fileSize);
            if(getImage.files && getImage.files[0]){//ensure that only one image is uploaded at a time
            
                if(fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png'){//ensure that file is jpg/jpeg
                /******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
                
                if(fileSize<=5000){
                    
                    var imgReader = new FileReader();// keyword NEW is used to create an instance of a class FileReader
                    imgReader.onload = function(e)//returning a value [e]
                    {
                        $('#userimage').attr('src', e.target.result);// append the uploaded image to the img tag
                        $("#picture_hidden_tag").val("T");
                    }
                    imgReader.readAsDataURL(getImage.files[0]);       
                }else{
                    alert("Image Size too large for Upload!");
                    $("#userfile").val('');
                }
                }else{
                alert("File format not Supported/Allowed for Upload!, Please Choose another.");
                $("#userfile").val('');
                }
            }
        }	           
      </script>


   </body>


</html>