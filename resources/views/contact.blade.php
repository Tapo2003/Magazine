
<!Doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>School University & Online Education Template | Eduan - eLearning Education</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        @include('css')
    </head>
     
    <body>
        
    <header>
    	<div class="top-strip">
        	<div class="container">
            	<div class="site-info">
                    <ul >
                        <li ><a href="mailto:toyinafepeace@gmail.com"><i class="fa fa-envelope-o"></i>toyinafepeace@gmail.com</a></li>
                        <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#"><i class="fa fa-search"></i></a></li> -->
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--Search Overlay Box Starts -->
        <div id="kode_search_box" class="kode_search_box">
            <form class="kode_search_box-form">
                <input class="kode_search_box-input" type="search" placeholder="Search..."/>
                <button class="kode_search_box-submit" type="submit">Search</button>
            </form>
            <span class="kode_search_box-close"></span>
        </div><!-- /kode_search_box -->         
        <div class="overlay"></div>
        @include('topnav')
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="kode5-inner-banner">
    	<div class="kode-page-heading">
        	<h2 style = "margin-top:40px;font-size:30px;font-family: Courier New
            Lucida Console;font-style: italic;">Contact Us</h2>
           
        </div>
        
    </div>

        <main>
           
            <section class="contact-area pt-120 pb-120">
                <div class="container">
                    <div class="contact-wrap">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <!-- <div class="contact-content pr-80 mb-20"> -->
                                <div class="pr-80 mb-20">
                                    <h3 class="contact-title mb-25">Contact Us</h3>
                                    <form action=""  method="post" enctype ="multipart/form-data">
                                        @csrf 
                                        <div class="row">   
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                                @if($errors)
                                                    @error('name')
                                                        <span style = "color:red">{{$message}}</span>
                                                    @enderror
                                                @endif
                                                <div class="contact-form-input mb-30">
                                                    <input type="text" name = "name" id = "contactname" placeholder="Your Name">
                                                    <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                                </div>
                                            </div>
                                          
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                                @if($errors)
                                                    @error('email')
                                                        <span style = "color:red">{{$message}}</span>
                                                    @enderror
                                                @endif
                                                <div class="contact-form-input mb-30">
                                                    <input type="email" name = "email" id = "contactemail" placeholder="Email Address">
                                                    <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-12">
                                                @if($errors)
                                                    @error('message')
                                                        <span style = "color:red">{{$message}}</span>
                                                    @enderror
                                                @endif
                                                <div class="contact-form-input mb-50 contact-form-textarea">
                                                    <textarea name = "message" cols="30" rows="10" placeholder="Send us a message !" id = "contactmessage" ></textarea>
                                                    <span class="inner-icon"><i class="fa-thin fa-pen"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-form-submit mb-30">
                                                    <div class="contact-form-btn">
                                                        <button type = "submit" class="theme-btn contact-btn">Send Message</button>
                                                    </div>
                                                    <!-- <div class="contact-form-condition">
                                                        <label class="condition_label">I agree that my data is collected and stored.
                                                            <input type="checkbox">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
              
            </section>
            
        </main><br>
        <div class="" style = "margin-top:30px;visibility:hidden"><br><br><br><br>
            <h2>Hello</h2>
        </div>
        @include('footer')
        <!-- footer area start -->
       <!-- footer area start -->
        
        <!-- footer area end -->
        <!-- footer area end -->

		<!-- JS here -->
        @include('js')
    </body>


</html>