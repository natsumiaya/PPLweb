<!DOCTYPE html>
<html>
    <head>
        <title> SIBEA</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/sibea.css"); ?>">
        <script type="text/javascript" src="<?php echo base_url("assets/js/modernizr.custom.28468.js"); ?>"></script>
    </head>
    <body>
         <div id= "navbar">
                <ul>
                    <div id = "left">
                        <li class="onleft"> <a class="scroll" href="#home" title="SIBEA"> SIBEA </a></li>
                    </div>
                    <div id="right">
                      <form action="<?php echo base_url() ?>login" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                    </div>
                </ul>   
            </div>
            <section id="home-one" class="page">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Easy management</h2>
                    <div class="da-img"><img src="<?php echo base_url('assets/img/2.png'); ?>" alt="image01" /></div>
                </div>
                <div class="da-slide">
                    <h2>Revolution</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class="da-img"><img src="<?php echo base_url("assets/img/3.png"); ?>" alt="image01" /></div>
                </div>
                <div class="da-slide">
                    <h2>Warm welcome</h2>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                    <div class="da-img"><img src="<?php echo base_url("assets/img/1.png"); ?>" /></div>
                </div>
                <div class="da-slide">
                    <h2>Quality Control</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

                    <div class="da-img"><img src="<?php echo base_url("assets/img/4.png"); ?>" /></div>
                </div>
                <nav class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </nav>
            </div>
            </section>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.7.1.min.js")?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.cslider.js")?>"></script>
        <script type="text/javascript">
            $(function() {
            
                $('#da-slider').cslider({
                    autoplay    : true,
                    bgincrement : 600
                });
            
            });
        </script>   
    </body>
</html>