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
                                <li   ><a href="<?php echo base_url()?>index.php/unggahakhir">Mengunggah Laporan Akhir Kerja Praktek</a></li>
                                <li><a href="<?php echo base_url()?>index.php/unggahkemajuan">Mengunggah Laporan Kemajuan Kerja Praktek</a></li>
                                <li><a href="<?php echo base_url()?>index.php/unggahkemajuan">Melihat Histori Laporan Kemajuan Kerja Praktek</a></li>
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
                    <h1><i class="icon-rocket icon-big"></i> Mengunggah Laporan Kemajuan Kerja Praktek</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Home</a> <span class="divider">/</span></li>
                
                        <li class="active">Mengunggah Laporan Kemajuan Kerja Praktek </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="container">
        

        <h4 class="pull-right" data-toggle="modal">ID Kelompok : O001K008</h4><br> <br>
        <h4><a class="pull-right" data-toggle="modal" href="#form"><i class="icon-plus icon-medium"></i>Unggah Laporan Kemajuan</a></h4>
        <div class="center gap">
            <h1><i class="icon-file icon-big"></i>Histori Laporan Kemajuan<i class="icon-file icon-big"></i>  </h1>
        </div>
        <div class="row-fluid">

           <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:5%;">No</th>
                  <th style="text-align:center; width:15%;">Tanggal Unggah</th>
                  <th style="text-align:center;width:10%;">Laporan</th>
                  <th style="text-align:center;width:15%;">Tanggal Feedback</th>
                  <th style="text-align:center;width:25%;">Feedback</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                  <td style="text-align:center;">1</td>
                  <td style="text-align:center;">2 Desember 2014</td>
                  <td style="text-align:center;"><a href="<?php echo base_url()?>assets/CV.docx" target="_blank">Download Laporan</a></td>
                  <td style="text-align:center;">12 Desember 2014</td>
                  <td style="text-align:center;">Lebih baik gunakan heading agar lebih mudah untuk navigasi dokumen. </td>
                  </tr>
              </tbody>
            </table>

    </div>
    <!--/Modal Body-->
<div class="modal hide fade in" id="form" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h3>Unggah Laporan Kemajuan</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
    <form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <p>
                &nbsp;Laporan Kemajuan Kerja Praktek:
                &nbsp;<input type="File" id="nama_beasiswa" class="input-small" placeholder="link dokumen laporan online" name="id kelompok" width:300px;>
            </p>
            <br>
            atau
            <p>
                &nbsp;Laporan Kemajuan Kerja Praktek:
                &nbsp;<textarea></textarea>
            </p>
            <br>
            <br>
            <br>
            <button type="submit" class="btn btn-success btn-large">Save </button>
        </form>
    

    </div>
    <!--/Modal Body-->
</div>
<!--  /Update form -->
</section>

<script src="<?php echo base_url("assets/js/vendor/jquery-1.9.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url("assets/js/jquery.ba-cond.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.slitslider.js"); ?>"></script>