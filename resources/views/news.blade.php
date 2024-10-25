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
    <div class="kode3-inner-banner">
    	<div class="kode-page-heading">
        	<h2 style = "margin-top:40px;font-size:30px;font-family: Courier New
            Lucida Console;font-style: italic;">Check Recent News</h2>
            
        </div>
       

        @if($errors)
            @error('title')
                <h2 style = "margin-left:450px;font-size:20px;font-family: Courier New
                Lucida Console;font-style: italic;color:red">{{$message}}</h2>
            @enderror
        @endif
        <div class="container">
        	<div class="banner-search">
            <form action="{{url('news')}}" method="post" enctype ="multipart/form-data">
            @csrf
                
            	<div class="row">
                	<div class="col-md-2">
                    	<h2>Check<br> Recent News</h2>
                    </div>
                   
                    <div class="col-md-6" >
                    	<input type="text" placeholder="Enter Your Title" name = "title" autofocus style = "color:black">
                    </div>
                    <div class="col-md-2">
                    	<select></select>
                    </div>
                    <div class="col-md-2">
                    	<button>Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div><br>
    </div>
    <!--BANNER END-->
    <!--CONTENT START-->
    <div class="kode-content padding-tb-50">
        <!-- <h1>{{config('app.name')}}</h1> -->
         <!-- str_replace -->
        <!--TOP AUTHERS START-->
        <div class="container">
            <div class="row">        
                <div class="row">
            	<!--LIST ITEM START-->
                <?php
                    if(isset($unexistingsubject)){
                       echo "<h1 style = 'text-align:center;color:red;font-family: Courier New
                        Lucida Console;font-style: italic;font-size:30px'>$unexistingsubject</h1>"; 
                    }else{
                        echo '<h1 style = "text-align:center;color:black;font-family: Courier New Lucida Console;font-style: italic;font-size:40px">READ RECENT NEWS</h1>';
                    }
                ?>
                
                <?php if(isset($emptynews)):?>
                    
                    <h1 style = "text-align:center;color:black;font-family: Courier New Lucida Console;font-style: italic;font-size:20px;color:red">{{$emptynews}}</h1>
                  
                     <a href="{{url('articles')}}"><h2 style = "text-align:center;color:black;font-family: Courier New Lucida Console;font-style: italic;font-size:15px;color:black">Go back</h2></a>
                <?php endif?>
                
                <?php if(isset($rows)):?>
                @foreach($rows as $row)
                <div class="col-md-4 col-sm-6">
                    <div class="kode-single-blog">
                        <figure>
                           
                        	<a href="{{url('contents/'.$row->slag)}}"><img src="{{url('uploads/'.$row->image)}}" style = "height:250px" alt=""></a>
                        </figure>
                        <div class="kode-text">
                        	<div class="kode-date">
                            {{date("jS",strtotime($row->created_at))}}
                            <span>{{date("M",strtotime($row->created_at))}}</span>
                            </div>
                        	<h3>{{$row->title}}</h3>
                            <p>By : {{$row->publisher}}</p>
                        </div>
                    </div> 
                </div>
                @endforeach
                <?php endif;?>  
                <!--LIST ITEM END-->
                <!--LIST ITEM START-->
                
               
                <!--LIST ITEM END-->
            </div>

                    <!--PRODUCT GRID END-->
            </div>
              <!--PAGINATION START-->
                <?php if(isset($rows) && $rows):?> 
                        <nav>
                        <ul class="pagination">
                            <?php if(isset($links) && is_array($links)):?>  
                                <?php foreach($links as $link):?> 
                                    <a href="<?=$link[1]?>">
                                    <button class = "btn <?=$link[2] ?'btn-primary':'';?> "><?=$link[0]?></button>
                                    </a>
                                <?php endforeach;?>
                            <?php endif;?>   
                        </nav>       
                 
                <?php endif;?> 
            
            <!--PAGINATION END-->
        </div>
        <!--TOP AUTHERS END-->
    </div>
    <!--CONTENT END-->
        <!--NEWSLETTER START-->
   
    <!--NEWSLETTER END-->
    @include('footer')
    
</div>

@include('js')
</body>

<!-- Mirrored from kodeforest.net/html/books/store/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 14:23:21 GMT -->
</html>