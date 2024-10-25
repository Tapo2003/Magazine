<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/books/store/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 14:20:30 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

@include('css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- <div id="loader-wrapper">
	<div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>

</div> -->
<!--WRAPPER START-->
<div class="wrapper">
	<!--HEADER START-->
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
    <div class="kode4-inner-banner">
    	<div class="kode-page-heading">
        	<h2 style = "margin-top:40px;font-size:30px;font-family: Courier New
            Lucida Console;font-style: italic;">About Us</h2>
           
        </div>
        
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content">
    	<!--BOOK GUIDE SECTION START-->
        <section>
        	<div class="container">
            	<!--SECTION CONTENT START-->
            	<div class="section-content margin-bottom-zero">
                	<h2>ABOUT US</h2>
                </div>
                <!--SECTION CONTENT END-->
                <div class="book-guide">
                	<div class="row">
                    	<div class="col-md-5">
                        	<!-- <img src="images/about-img2.png" alt=""> -->
                            <img src="{{url('asset/images/2.jpg')}}" alt="" height= '400px'>
                        </div>
                        <div class="col-md-7">
                        	<p class="cap">We are passionate about sharing knowledge and stories that matter. Our platform is a space where articles, news, and various write-ups come together to offer readers a diverse range of perspectives. From the latest headlines to in-depth features, we cover topics that keep you informed and spark curiosity.</p>
                            <p>Our mission is simple: to provide a reliable and engaging resource for readers who want to stay up-to-date, explore new ideas, and enjoy quality content. Whether it’s breaking news, insightful opinion pieces, or thought-provoking essays, our team is committed to delivering content that resonates with you.
                            We believe that every story has the power to make an impact, and we’re here to share those stories with you. Whether you're looking for current events, in-depth analysis, or just something new to explore, Our website has it all. Our mission is to create a space where curiosity thrives, and ideas flow freely. We’re passionate about providing content that not only informs but also entertains and sparks conversation. From the serious to the imaginative, we bring together a world of topics for you to explore. We are a platform built for readers who seek diverse content, from breaking headlines to captivating stories and creative expressions. Whether you're here to catch up on the latest news, dive into thoughtful articles, or lose yourself in a poem, we’ve got something for every reader.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BOOK GUIDE SECTION END-->
        
        
       
        <!--TOP AUTHERS END-->
    </div>


        <!-- <div class="container" style = "background-color:white">
            <h1 style = "visibility:hidden">Hello</h1>
        </div> -->
    <!--NEWSLETTER END-->
    @include('footer')
    
</div>
@include('js')
</body>
</html>