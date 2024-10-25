<footer style = "margin-top:20px">
    <div class="container">
        <div class="row">
            <!--TEXT WIDGET START-->
            
            <!--TEXT WIDGET END-->
            <!--TWITTER WIDGET START-->
        
            <!--TWITTER WIDGET END-->
            <!--CATEGORY WIDGET START-->
            <div class="col-md-3">
                <div class="widget widget-categories">
                    <h2>Our Links</h2>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li> 
                        <li><a href="{{url('about')}}">About us</a></li> 
                        <li><a href="{{url('articles')}}">Aritcles</a></li> 
                        <li><a href="{{url('news')}}">News</a></li> 
                        <li><a href="{{url('contact')}}">Contact us</a></li> 
            
                    </ul>
                </div>
            </div>
            <!--CATEGORY WIDGET END-->
            <!--NEWSLETTER START-->
            <div class="col-md-3" style = "visibility:hidden">
                <div class="widget widget-newletter">
                    <h2>Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <input type="text" placeholder="E-mail ID">
                    <button>Subscribe</button>
                </div>
            </div>
            <!--NEWSLETTER START END-->
        </div>
    </div>
</footer>
<div class="copyrights">
    <div class="container">
        <p>Copyright © <?php echo date('Y'); ?> All Rights Reserved by Piz_tech</p>
        <div class="cards"><img src="images/cards.png" alt=""></div>
    </div>
</div>