<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/vito/html/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:14 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Web Sample</title>
      
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
       <style>
            #header {
                border: 1px solid black;
               
               padding:5px 5px 5px 5px;
                  
               
            }

            body {
               background-image: url("assets/images/home2.jpg");
            }
       </style>
      <!-- loader Start -->
      <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
      <div class="wrapper">
    
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-9">                
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h2 class="card-title"><center>Form Registration</center></h2>
                           </div>
                        </div>
                        
                        <div class="iq-card-body">
                           <form id = "Registration">
                                 <div class="form-row">                                   
                                    <div class="col-lg-6">
                                        <label>Add Image<span style = "color:red"> [optional] </span></label>
                                        <div class="custom-file">
                                          <input type="hidden" id="picture_hidden_tag" name="picture_hidden_tag" value="F">
                                          <input type="file" class="custom-file-input" id="userfile" name="files[]" onchange="preveiwImage(this)">
                                          <label class="custom-file-label">Choose file</label>
                                       </div>
                                    </div>
                                    <div class="col-lg-6" style="float:right">
                                        <img id="userimage" name="userimage" src="assets/images/register-img.jpg" class="img-fluid rounded mr-3" alt="user" width="100px" height="100px">      
                                    </div>
                                 </div>

                                 <div class="form-row">       
                                    <div class="col-md-6 mb-3">
                                        <label>Firstname</label>
                                        <input type="text" class="form-control" id = "firstname" name = "firstname" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Othername.</label>
                                        <input type="text" class="form-control" id ="othername" name = "othername" required>
                                    </div> 
                                    
                                 </div>
                                 <div class="form-row">       
                                    <div class="col-md-6 mb-3">
                                        <label>Username</label>
                                        <input type="text" class="form-control" id = "username" name = "username" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id = "email" name = "email" required>
                                    </div>
                                    
                                 </div>
                                 <div class="form-row">       
                                    <div class="col-md-6 mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id = "password" name = "password" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Confirmpassword</label>
                                        <input type="password" class="form-control" id = "cpassword" name = "cpassword" required>
                                    </div>
                                 </div>
                                 <div class = "form-row">
                                       <div class="col-6">
                                          <label>Add A File</label>
                                          <div class="custom-file">
                                             <input type="hidden" id="document_hidden_tag" name="document_hidden_tag" value="F">
                                             <input type="file" class="custom-file-input" name="files[]" id="file_" onchange = "viewFile()">
                                             <label class="custom-file-label">Choose file</label>
                                          </div>
                                       </div>
                                    
                                       <div class="col-md-6 mb-3">      
                                          <label>Select from option one to five</label>                             
                                          <select class="form-control" id="homeoption" name = "homeoption" required>
                                          <option></option>      
                                          <option id = "option1" name = "option1">option-1</option>
                                          <option id = "option2" name = "option2">option-2</option>
                                          <option id = "option3" name = "option3">option-3</option>
                                          <option id = "option4" name = "option4">option-4</option>
                                          <option id = "option5" name = "option5">option-5</option>
                                          </select>
                                       </div>
                                 </div>                                           
                                 <button type="button" name="save" class="btn btn-success" onclick="register()">Register</button>
                                 
                           </form>     
                           <a href="index.php" style = "color:black">SIGN IN ➞</a><br><br><br>   
                        </div>
                        
                     </div>
                     
                     
                  </div>
                 
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
     
      <!-- Footer END -->
         <?php 
            require_once("js.php");
         ?>

      <script>
          $(document).ready(function(){
            //   alert(88)#
            $("#firstname").focus();
            $("document_hidden_tag").val("F");
            
          });

         function register(){   
            firstname   = $("#firstname").val();
            password    = $("#password").val();
            email       = $("#email").val();
            othername   = $("#othername").val();
            username    = $("#username").val();
            cpassword   = $("#cpassword").val();
            homeoption  = $("#homeoption").val();
            option1     = $("#option1").val();
            option2     = $("#option2").val();
            option3     = $("#option3").val();
            option4     = $("#option4").val();
            option5     = $("#option5").val();


            if(firstname == ""|| password == "" || cpassword == "" || email == "" || homeoption == "" || othername == "" || username == ""){
                  alert("Please Fill up the form");
            }else{
               if(password != cpassword){
                  alert("Password Mismatch");
               }else{
                  feedback = confirm("You are dropping or updating your snippet?");
                  var data = $("form#Registration")[0]; 	
                  var formData = new FormData(data); //creating an instance of the class FormData using the keyword NEW
                  if(feedback == true){
                     $.ajax({                                
                     url: "processRegister.php",
                     type: 'POST',
                     data: formData,
                     async: false,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (e) 
                     {  
                        if(e == 11){
                           alert("Information saved Successfully");
                           Clearfields();
                        }else if (e == -1){
                           alert("Unable to save Information");
                           Clearfields();
                        }else if (e == -2){
                           alert("Information saved but unable to add files");
                        }else if(e == 0){
                          alert("Please email already exist");
                        }else{
                           alert("A problem occured, visit the admin");
                        }
                     }
                     });	
                  } 
                     
               }     
            }            
         }

         function Clearfields(){
            firstname = $("#firstname").val('');
            othername = $("#othername").val('');
            password = $("#password").val('');
            username = $("#username").val('');
            cpassword = $("#cpassword").val('');
            email = $("#email").val('');
            homeoption = $("#homeoption").val('')    
         }

         function viewFile(){
            $("#document_hidden_tag").val("T");
            
         }
         
         function viewimage(){
            $("#picture_hidden_tag").val("T");
         }

         function preveiwImage(getImage)
         {
            
            var fileType = document.getElementById('userfile').files[0].type;
            var fileSize = document.getElementById('userfile').files[0].size;
            /*******CONVERT IMAGE FILE TO KILOBYTE*******/
            var fileSize = Math.floor(fileSize/(1024));
            if(getImage.files && getImage.files[0]){//ensure that only one image is uploaded at a time
               if(fileType == 'image/jpg' || fileType == 'image/jpeg'){//ensure that file is jpg/jped
                  /******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
                  if(fileSize<1025){
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

<!-- Mirrored from iqonic.design/themes/vito/html/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:14 GMT -->
</html>