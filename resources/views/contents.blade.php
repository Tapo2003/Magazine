<?php
    $root =  url('');
    
?>
<!DOCTYPE html>
<html lang="en">
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
<div id="loader-wrapper">
	<!-- <div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div> -->

</div>
<!--WRAPPER START-->
<div class="wrapper">
	<!--HEADER START-->
	<header>
    	<!-- <div class="top-strip">
        	<div class="container">
            	<div class="site-info">
                    <ul >
                        <li ><a href="mailto:toyinafepeace@gmail.com"><i class="fa fa-envelope-o"></i>toyinafepeace@gmail.com</a></li>
                        
                    </ul>
                </div>
            </div>
        </div> -->
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

    @if($rows)
    @foreach($rows as $row)
    <div class="kode2-inner-banner">
    	<div class="kode-page-heading">
        <h2>{{$row->title}}</h2>
            
        </div>
       
    </div>
   
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <div class="container">
        	<div class="row">
                <div class="col-md-12">
                	<!--BLOG FULL LIST START-->
                    <div class="kode-blog-detail">
                    	
                        <div class="kode-detail-meta">
                        	<!--USER PROFILE START-->
                        	<div class="kode-user">
                            	<div class="user-thumb">
                                	<a href="#"><img src="{{url('uploads/'.$row->image)}}" alt=""></a>
                                </div>
                                <div class="user-profile">
                                	<h4>{{$row->publisher}}, <span>Author</span></h4>
                                </div>
                            </div>
                            <!--USER PROFILE END-->
                            
                        </div>
                        <div class="kode-text">
                        	
                            <p><?=str_replace('src="','src="'.$root.'/',$row->content)?></p>
                            
                        </div>
                    	
                    </div>
                    
                    <!--COMMENT FORM END-->
                </div>
                <!--SIDEBAR START-->
               
                <!--SIDEBAR END-->
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <!--CONTENT END-->
     
    @include('footer')
</div>
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@include('js')
</body>
</html>


</html>