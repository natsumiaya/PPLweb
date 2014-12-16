<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin | SIBEA</title>
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
                       <li class="dropdown active">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Kelola Beasiswa<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url();?>index.php/mengelolabeasiswa">Data Beasiswa</a></li>
                                <li class="active"><a href="<?=base_url();?>index.php/mengelolasumber">Sumber Beasiswa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Kelola Pendaftar <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li   ><a href="<?=base_url();?>index.php/validasiberkas">Validasi Berkas Pendaftar</a></li>
                                <li><a href="AturPelamar.php">Status Beasiswa Pendaftar</a></li>
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
                    <h1><i class="icon-rocket icon-big"></i> Beasiswa</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Kelola</a> <span class="divider">/</span></li>
                
                        <li class="active">Data Beasiswa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="container">
		

	<a class="pull-right" data-toggle="modal" href="#insertjobForm"><i class="icon-plus icon-medium"></i>Tambahkan Sumber Beasiswa</a>
        <div class="center gap">
			<h1><i class="icon-file icon-big"></i> Daftar Beasiswa <i class="icon-file icon-big"></i>  </h1>
		</div>
        <div class="row-fluid">

           <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:10px;">No</th>
                  <th style="text-align:center;">Sumber Beasiswa</th>
				  <th style="text-align:center;width:50px;">ID</th>
				  <th style="text-align:center;">Telpon</th>
                  <th style="text-align:center;">Alamat</th>
                  <th style="text-align:center;">E-mail</th>
				  <th style="text-align:center;">Manage</th>
                  
                </tr>
              </thead>
              <tbody>
				  <tr>
				  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Karya Salemba Empat</td>
				  <td style="text-align:center;width:120px;">200001</td>
				  <td style="text-align:center;width:150px">031-58190275</td>
                  <td style="text-align:center;">Jalan Mangga 2, Surabaya</td>
                  <th style="text-align:center;">kse@blabla.com</th>
				  <td style="text-align:center;">
					<a data-toggle="modal" href="#form-update">Edit</a>
					<a data-toggle="modal" href="#delete" style="color:red">Delete</a>
				  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">2</td>
                  <td style="text-align:center;">TC09</td>
                  <td style="text-align:center;width:120px;">200002</td>
                  <td style="text-align:center;width:150px">031-5129847</td>
                  <td style="text-align:center;">Jalan Mawar 1, Surabaya</td>
                  <th style="text-align:center;">tc09@blabla.com</th>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#form-update">Edit</a>
                    <a data-toggle="modal" href="#delete" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">3</td>
                  <td style="text-align:center;">Djarum Foundation</td>
                  <td style="text-align:center;width:120px;">200003</td>
                  <td style="text-align:center;width:150px">031-578561</td>
                  <td style="text-align:center;">Jalan Kiwi 5, Surabaya</td>
                  <th style="text-align:center;">beswan@blabla.com</th>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#form-update">Edit</a>
                    <a data-toggle="modal" href="#delete" style="color:red">Delete</a>
                  </td>
              </tbody>
            </table>

    </div>

</section>


<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                 <span>&copy; SIBEA 2014 All right reserved. By </span><a>APSE_5112100055_5112100084</a>
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
<!--  Insert form -->
<div class="modal hide fade in" id="insertjobForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <center><h3>Tambahkan Beasiswa</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
	<form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolasumber/submit" method="post" id="form-insert">
            <p>
                &nbsp;Nama Sumber:
				&nbsp;<input type="text" id="nama_sumber" class="input-small" placeholder="Nama Sumber" name="namasumber">
            </p> 
			<br>
			 <p>
                &nbsp;Alamat Sumber:
				&nbsp;<input type="text" id="alamat_sumber" class="input-small" placeholder="Alamat Sumber" name="alamatsumber">
            </p> 
            
			<br>
            <p>
                &nbsp;Telepon Sumber:
				&nbsp;<input type="text" id="telp_sumber"class="input-small" placeholder="Telepon Sumber" name="teleponsumber">
            </p>
			 
			<br>
            <p>
                &nbsp;E-mail Sumber:
				&nbsp;<input type="text" id="email_sumber" class="input-small" placeholder="Email Sumber" name="emailsumber">
            </p> 
            <br>
			<br>
            <button type="submit" class="btn btn-success btn-large">Save </button>
        </form>
	

    </div>
    <!--/Modal Body-->
</div>
<!--  /Insert form -->

<!--  Update form -->
<div class="modal hide fade in" id="form-update" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h3>Update Beasiswa</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
	<form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolasumber/update" method="post" id="form-update">
            <p>
                &nbsp;Nama Sumber:
                &nbsp;<input type="text" id="nama_sumber" class="input-small" placeholder="Nama Sumber" name="namasumber">
            </p> 
            <br>
             <p>
                &nbsp;Alamat Sumber:
                &nbsp;<input type="text" id="alamat_sumber" class="input-small" placeholder="Alamat Sumber" name="alamatsumber">
            </p> 
            
            <br>
            <p>
                &nbsp;Telepon Sumber:
                &nbsp;<input type="text" id="telp_sumber"class="input-small" placeholder="Telepon Sumber" name="teleponsumber">
            </p>
             
            <br>
            <p>
                &nbsp;E-mail Sumber:
                &nbsp;<input type="text" id="email_sumber" class="input-small" placeholder="Email Sumber" name="emailsumber">
            </p> 
            <br>
            <br>
            <button type="submit" class="btn btn-success btn-large">Save </button>
        </form>
	

    </div>
    <!--/Modal Body-->
</div>
<!--  /Update form -->

<!--  Delete -->
<div class="modal hide fade in" id="delete" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
      
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <center><form class="form-inline" action="AturLowongan.php" method="post" id="delete">
			<h3 style="color:red">Apakah anda yakin ingin menghapus sumber beasiswa ini?</h3>
            <button type="submit" class="btn btn-primary">Ya</button>
			 <button type="danger" class="btn btn-danger">Tidak</button>
        </form>
        </center>
    </div>
    <!--/Modal Body-->
</div>
<!--  Delete -->


<script src="<?php echo base_url("assets/js/vendor/jquery-1.9.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

</body>
</html>
