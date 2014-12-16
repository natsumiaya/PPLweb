<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin's Home | SISAC</title>
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
                <a id="logo" class="pull-left" href="Home.php"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="Home.php">Home</a></li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Manage <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li   ><a href="AturLowongan.php">Job Vacancy</a></li>
                                <li><a href="AturPelamar.php">Applicant</a></li>
								<li ><a href="AturPerusahaan.php">Company</a></li>
								<li ><a href="AturHasilSeleksi.php">Result</a></li>
								<li ><a href="AturJadwalTes.php">Test Schedule</a></li>
                            </ul>
							</li>
                        <li class="active"><a href="LihatLowongan.php">Poster</a></li>
                       
                       
                        <li><a href="contact-us.php">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Account <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                
								<li><a href="login.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><i class="icon-camera icon-big"></i> Poster Job Vacancy</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a> <span class="divider">/</span></li>
                
                        <li class="active">Poster</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->     

    <section id="portfolio" class="container main">    
        <ul class="gallery col-4">
            
            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/alvinphotography.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/alvinphotography.jpg" alt=" " width="100%" >
                    </div>
                </div>                 
            </li>
            <!--/Item 4--> 

            

            <!--Item 6-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/bentangpustaka.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-6"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-6" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/bentangpustaka.jpg" alt=" " width="100%" >
                    </div>
                </div>                 
            </li>
            <!--/Item 6-->                 

            <!--Item 7-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/creativestudiouk.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-7"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-7" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/creativestudiouk.jpg" alt=" " width="100%">
                    </div>
                </div>                 
            </li>
            <!--/Item 7-->

            <!--Item 8-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/tirtasaranasukses.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-8"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-8" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/tirtasaranasukses.jpg" alt=" " width="100%"   >
                    </div>
                </div>                 
            </li>
            <!--/Item 8-->
            
            <!--Item 9-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/pertamina-pheon.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-9"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-9" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/pertamina-pheon.jpg" alt=" " width="100%"   >
                    </div>
                </div>                 
            </li>
            <!--/Item 9--> 

            <!--Item 10-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/jakartapost.png">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-10"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-10" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/jakartapost.png" alt=" " width="100%"   >
                    </div>
                </div>                 
            </li>
            <!--/Item 10-->


            <!--Item 12-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/djavaweb.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-12"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-12" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/djavaweb.jpg" alt=" " width="100%"   >
                    </div>
                </div>                 
            </li>
            <!--/Item 12-->           
				    <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/woroworo2.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-2"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-2" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/woroworo2.jpg" alt=" " width="100%" >
                    </div>
                </div>                 
            </li>
            <!--/Item 2-->
			<!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/woroworo1.png">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/woroworo1.png" alt=" " width="100%" >
                    </div>
                </div>                 
            </li>
            <!--/Item 1--> 

        

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/chocoart.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/chocoart.jpg" alt=" " width="100%">
                    </div>
                </div>                 
            </li>
            <!--/Item 3--> 
			<!--Item 5-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/hsbc.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-5"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>Woro Woro Game Studio</h5>
                    <small>Programmer, Illustrator</small>
                </div>
                <div id="modal-5" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/hsbc.jpg" alt=" " width="100%"   >
                    </div>
                </div>                 
            </li>
            <!--/Item 5--> 


        </ul>
        
    </section>


<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                <span>&copy; SISAC 2014 All right reserved. By </span>APSC_5112100119_5112100140</a>
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


<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
