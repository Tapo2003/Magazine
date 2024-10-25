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
                              <h2 class="card-title"><center>SIGIN IN</center></h2>
                           </div>
                        </div>
                        
                        <div class="iq-card-body">
                           <form id = "Signin">
                                 <div class="form-row">       
                                    <div class="col-md-8 mb-3">
                                        <label>Username</label>
                                        <input type="text" class="form-control" id = "username" name = "username" required>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id = "password" name = "password" required>
                                    </div>
                                    
                                 </div>
                                 <div class="form-row">       
                                    <div class="col-md-8 mb-3"><br>       
                                        <label>Select An Option</label>                             
                                       <select class="form-control" id="homeoption" name = "homeoption" required>
                                          <option></option>
                                          <!-- <option></option> -->
                                          <option id = "option1" name = "option1">option-1</option>
                                          <option id = "option2" name = "option2">option-2</option>
                                          <option id = "option3" name = "option3">option-3</option>
                                          <option id = "option4" name = "option4">option-4</option>
                                          <option id = "option5" name = "option5">option-5</option>
                                       </select>
                                    </div>
                                 </div>                                           
                                 <button type="button" name="save" class="btn btn-success" onclick="Signin()">Signin</button>
                                 
                           </form>     
                           <a href="register.php" style = "color:black">SIGN UP ➞</a><br><br><br>   
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
            $("#username").focus();
            
          });

         function Signin(){
            password    = $("#password").val();
            email       = $("#email").val();
            homeoption  = $("#homeoption").val();
            option1     = $("#option1").val();
            option2     = $("#option2").val();
            option3     = $("#option3").val();
            option4     = $("#option4").val();
            option5     = $("#option5").val();

            
            if(password == "" || email == "" || homeoption == ""){
                alert("Please fill up the form");
            }else{
                var response = confirm("You Are Signing in Your form");
                if(response == true){
                var formData = $("form#Signin").serialize();
                $.ajax({ 
                    type:"POST",
                    url: "processSignin.php",     
                    data:formData,
                    success:function(returnData)
                    {	
                        if(returnData == 1){
                            if(option1 == homeoption){
                            alert("Registration Successful");
                            window.location.href="homepage1.php";
                            }else{
                            if(option2 == homeoption){
                                alert("Registration Successful");
                                window.location.href="homepage2.php";
                              }else{
                                if(option3 == homeoption){
                                    alert("Registration Successful");
                                    window.location.href="homepage3.php";
                                 }else{
                                    if(option4 == homeoption){
                                        alert("Registration Successful");
                                        window.location.href="homepage4.php";
                                    }else{
                                        if(option5 == homeoption){
                                        alert("Registration Successful");
                                        window.location.href="homepage5.php";
                                        }
                                    }
                                 }
                              }
                            }
                        }else if(returnData == 0){
                            alert("Unable to Signin account/Something went wrong");
                        }else if(returnData == -1){
                            alert("Username already exist please");
                        }else{
                            alert(returnData)
                        }                       
                     }
                });
               }      
            }
            
         }

         function Clearfields(){
            email = $("#email").val('');
            homeoption = $("#homeoption").val('');
            password = $("#password").val('');          
         
         }

      </script>

   </body>

<!-- Mirrored from iqonic.design/themes/vito/html/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 13:37:14 GMT -->
</html>