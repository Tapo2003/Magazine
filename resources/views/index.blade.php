<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- CUSTOM STYLE -->

@include('css')
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
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2 style = "margin-top:40px;font-size:30px;font-family: Courier New
            Lucida Console;font-style: italic;">Read <a href="articles">Articles</a> And Check Recent <a href="news">News</a></h2>
            
        </div>
        <!-- <div class="container">
        	<div class="banner-search">
            	<div class="row">
                	<div class="col-md-2">
                    	<h2>Search<br> Your Books</h2>
                    </div>
                    <div class="col-md-6">
                    	<input type="text" placeholder="Enter Your Title">
                    </div>
                    <div class="col-md-2">
                    	<select></select>
                    </div>
                    <div class="col-md-2">
                    	<button>Search</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!-- <h1>{{config('app.name')}}</h1> -->
         <!-- str_replace -->
        <!--TOP AUTHERS START-->
        <div class="container">
            <div class="row">
                <h1 style = "text-align:center;color:white;background-color:hsla(0, 100%, 2%, 1);border-radius:50px;font-size:25px;padding:20px;font-family: Courier New
                Lucida Console;font-style: italic;">Enjoy Your Existence With Lovely Books and Get Updated With Our Daily News</h1>
                <div class="row">
            	<!--LIST ITEM START-->
                @if($rows->all())
                @foreach($rows as $row)
                <div class="col-md-4 col-sm-6"><br>
                    <div class="kode-single-blog">
                        <figure>
                           
                        	<a href="{{url('articles')}}"><img src="{{url('uploads/'.$row->image)}}" style = "height:250px" alt=""></a>
                        </figure>
                        <div class="kode-text">
                        	<div class="kode-date">
                            	16
                                <span>May</span>
                            </div>
                        	<h3>{{$row->title}}</h3>
                            <p>By : {{$row->publisher}}</p>
                        </div>
                    </div> 
                </div>
                @endforeach
                @else
                <div class="col-md-4 col-sm-6"><br>
                    <div class="kode-single-blog">
                        <figure>
                            <img src="{{url('asset/images/16.jpg')}}" alt="" height= '300px'>
                        </figure>
                        <!-- <div class="kode-text">
                        	<div class="kode-date">
                            	16
                                <span>May</span>
                            </div>
                        	
                        </div> -->
                    </div> 
                </div>
                @endif
                <!--LIST ITEM END-->
                <!--LIST ITEM START-->
                
               
                <!--LIST ITEM END-->
            </div>

                    <!--PRODUCT GRID END-->
            </div>
            <!--PAGINATION START-->
            <!-- <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav> -->
            <!--PAGINATION END-->
        </div>
        <!--TOP AUTHERS END-->
    </div>
    
    <section class="kode-newsletters">
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-content white">
                <h2>About us.</h2>
                <p>We are dedicated to providing readers with well-researched content that informs, inspires, and engages. Our team of writers covers a wide range of topics, from current events and thought-provoking opinions to lifestyle, technology, and everything in between. we believe in the power of words to shape perspectives and spark conversations. Whether you're here to stay informed or simply looking for engaging reads, we’ve got something for everyone.</p>
            </div>
            
        </div>
    </section>
        <section class="kode-video-section-2">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="kode">
                            <a href="#">
                        	   <img src="{{url('asset/images/2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="kode-text">
                            <p>We are passionate about sharing knowledge and stories that matter. Our platform is a space where articles, news, and various write-ups come together to offer readers a diverse range of perspectives. From the latest headlines to in-depth features, we cover topics that keep you informed and spark curiosity.</p>
                            <a href="{{url('about')}}" class="more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style = "background-color:white">
            <h1 style = "visibility:hidden">Hello</h1>
        </div>
    <!--NEWSLETTER END-->
    @include('footer')
    

    
</div>
@include('js')
</body>
</html>