<<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | SI KP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-responsive.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sl-slide.css");?>">
    <script src="<?php echo base_url("assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"); ?>"></script>

    <!-- Le fav and touch icons -->
    <!--<link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">-->
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo base_url();?>index.php"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
 <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                     <center><img  src="<?php echo base_url();?>assets/images/sample/slider/img1.png" alt="" /></center>
                      
                        
                      
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                       <center><img src="<?php echo base_url();?>assets/images/sample/slider/img2.jpg" alt="" /></center>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                   <center><img src="<?php echo base_url();?>assets/images/sample/slider/img3.jpg" alt="" /></center>
                
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->


<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Layanan</h3>
            <p class="lead">Inilah layanan yang diberikan Sistem Informasi ini kepada anda</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Akses dimanapun</h4>
                         
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Kerja Praktek Terpantau</h4>
                         
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Informasi mudah</h4>
                         
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
</section>
<!--/Services-->



<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">OUR PARTNERS</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
               
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client1.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client2.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client3.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client4.png");?>"</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client4.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client3.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client2.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client1.png");?>"</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client1.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client2.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client3.png");?>"</a></li>
                                <li class="span3"><a href="#"><img src="<?php echo base_url("assets/images/sample/clients/client4.png");?>"</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>



<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                <span>&copy; SIBEA 2014 All right reserved. By </span>APSE_5112100055_5112100084</a>
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <!--<h5 style="color:red" class="alert"> Username atau Password yang dimasukkan salah</h5>-->
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?=base_url();?>index.php/home" method="post" id="form-login"/>
            <input type="text" class="input-small" required="required" placeholder="username" name="username">
			<br>
            <input type="password" class="input-small" required="required" placeholder="Password" name="pass">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="falseLogin.php">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->
<!--  Login False form -->
<div class="modal hide fade in" id="loginFalseForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="Home.php" method="post" id="form-login">
           <h1> Your Username & Password are false, Please Login again</h1>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->


<script src="<?php echo base_url("assets/js/vendor/jquery-1.9.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url("assets/js/jquery.ba-cond.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.slitslider.js"); ?>"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>