<!DOCTYPE html>
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
                <a id="logo" class="pull-left" href="Home.php"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="<?php echo base_url()?>index.php/home">Home</a></li>
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Kerja Praktek<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li   ><a href="<?php echo base_url()?>index.php/mendaftar">Mendaftar Kerja Praktek</a></li>
                                <li><a href="<?php echo base_url()?>index.php/">Melihat Status Kerja Praktek</a></li>
                            </ul>
						</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Laporan Kerja Praktek<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li   ><a href="<?php echo base_url()?>index.php/unggahakhir">Mengunggah Laporan Kerja Praktek</a></li>
                                <li><a href="<?php echo base_url()?>index.php/unggahkemajuan">Mengunggah Laporan Kemajuan Kerja Praktek</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Account <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                              
								<li><a href="<?=base_url();?>index.php">Log Out</a></li>
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
                    <h1><i class="icon-rocket icon-big"></i> Mengunggah Laporan Akhir Kerja Praktek</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a> <span class="divider">/</span></li>
                
                        <li class="active">Mengunggah Laporan Akhir Kerja Praktek </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="container">
        

    
        <div class="center gap">
            <h1><i class="icon-file icon-big"></i> Mengunggah Laporan Akhir Kerja Praktek <i class="icon-file icon-big"></i>  </h1>
        </div>
        <div class="row-fluid">

    <!--Insert Body-->
    <div class="modal-body">
    <form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <p>
                &nbsp;ID Kelompok:
                &nbsp;<input type="text" id="nama_beasiswa" class="input-small" placeholder="auto get ID" name="id kelompok">
            </p>
            <p>
                &nbsp;Laporan Kerja Praktek:
                &nbsp;<input type="file" id="nama_beasiswa" class="input-small" placeholder="Nama Mahasiswa" name="id kelompok">
            </p>
            <br>
            <br>
            <br>
            <button type="submit" class="btn btn-success btn-large">Save </button>
        </form>
    

    </div>
    <!--/Modal Body-->

</section>

<script src="<?php echo base_url("assets/js/vendor/jquery-1.9.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url("assets/js/jquery.ba-cond.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.slitslider.js"); ?>"></script>