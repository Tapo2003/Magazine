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
    <div class="wrapper">
       <!--HEADER START-->
       <header>
    	<div class="top-strip">
        	<div class="container">
            	<div class="site-info">
                    <ul>
                        <li ><a href="mailto:toyinafepeace@gmail.com"><i class="fa fa-envelope-o"></i>toyinafepeace@gmail.com</a></li>
                       
                        
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
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Signup As An Admin</h2>
            <ol class="breadcrumb">
              <!-- <li><a href="#">Home</a></li>
              <li><a href="#">Books Guide</a></li>
              <li class="active">Product Style</li> -->
            </ol>
        </div>
       
    </div>
        <!-- header area end -->
        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
                <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="breadcrumb-title">Sign Up</h2>
                                <div class="breadcrumb-list">
                                    <a href="{{url('/')}}">Home</a>
                                    <span>Sign Up</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- sign up area start -->
            <div class="account-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="account-wrap">
                                <div class="account-top sign-up">
                                    <div class="account-top-current">
                                        <span>Sign Up</span>
                                    </div>
                                    <div class="account-top-link">
                                        <a href="{{url('signin')}}">Sign In</a>
                                    </div>
                                </div>
                                <div class="account-main">
                                    <h3 class="account-title" style= "text-align:center">Sign Up 👋</h3>
                                    <form action="#"  method = "post">
                                    @csrf
                                       
                                        <div class="account-form-item mb-20">
                                            <div class="account-form-label">
                                                <label>First Name</label>
                                            </div>
                                            <div class="account-form-input">
                                                <input type="text" placeholder="First Name" name = "fname" value = "{{old('fname')}}">
                                            </div>
                                            @if($errors)
                                            @error('fname')
                                                <span style = "color:red">{{$message}}</span>
                                            @enderror
                                            @endif
                                        </div>
                                        <div class="account-form-item mb-20">
                                            <div class="account-form-label">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="account-form-input">
                                                <input type="text" placeholder="Last Name" name = "lname" value = "{{old('lname')}}">
                                            </div>
                                            @if($errors)
                                            @error('lname')
                                                <span style = "color:red">{{$message}}</span>
                                            @enderror
                                            @endif
                                        </div>
                                        <div class="account-form-item mb-20">
                                            <div class="account-form-label">
                                                <label>Your Email</label>
                                            </div>
                                            <div class="account-form-input">
                                                <input type="email" placeholder="Enter Your Email" name = "email" value = "{{old('email')}}">
                                            </div>
                                            @if($errors)
                                            @error('email')
                                                <span style = "color:red">{{$message}}</span>
                                            @enderror
                                            @endif
                                        </div>
                                        <div class="account-form-item mb-15">
                                            <div class="account-form-label">
                                                <label>Your Password</label>
                                                <!-- <a href="#">Forgot Password ?</a> -->
                                            </div>
                                            <div class="account-form-input account-form-input-pass">
                                                <input type="text" placeholder="*********" name ="password" value= "{{old('password')}}">
                                                <span><i class="fa-thin fa-eye"></i></span>
                                            </div>
                                            @if($errors)
                                            @error('password')
                                                <span style = "color:red">{{$message}}</span>
                                            @enderror
                                            @endif
                                        </div>
                                        <div class="account-form-condition">
                                            <label class="condition_label">Remember Me
                                                <input type="checkbox">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="account-form-button" >
                                            <button type="submit" class="account-btn" style = "padding-bottom:50px">Sign Up</button>
                                        </div>
                                    </form>
                                    <!-- <div class="account-break">
                                        <span>OR</span>
                                    </div> -->
                                    <!-- <div class="account-bottom">
                                        <div class="account-option">
                                            <a href="#" class="account-option-account">
                                                <img src="assets/img/bg/google.png" alt="">
                                                <span>Google</span>
                                            </a>
                                            <a href="#" class="account-option-account">
                                                <img src="assets/img/bg/apple.png" alt="">
                                                <span>Apple</span>
                                            </a>
                                            <a href="#" class="account-option-account">
                                                <img src="assets/img/bg/facebook.png" alt="">
                                                <span>Facebook</span>
                                            </a>
                                        </div>
                                        <div class="account-bottom-text">
                                            <p>Already have an account ?  <a href="sign-in.html">Sign In for here</a></p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sign up area end -->

          
        </main>

        <!-- footer area start -->
      <!--NEWSLETTER END-->
    @include('footer')
    
    </div>
    @include('js')
    </body>
    </html>