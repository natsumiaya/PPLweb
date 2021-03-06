<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Organisasi | SI KP</title>
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
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Kelola Pembimbing Lapangan<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li  class="active"  ><a href="<?=base_url();?>index.php/mengelolabeasiswa">Data Beasiswa</a></li>
                                <li><a href="<?=base_url();?>index.php/mengelolasumber">Sumber Beasiswa</a></li>
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
                    <h1><i class="icon-rocket icon-big"></i> Pembimbing Lapangan</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Kelola</a> <span class="divider">/</span></li>
                
                        <li class="active">Pembimbing Lapangan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="container">
		

	<a class="pull-right" data-toggle="modal" href="#insertjobForm"><i class="icon-plus icon-medium"></i>Tambahkan Pembimbing Lapangan Baru</a>
        <div class="center gap">
			<h1><i class="icon-file icon-big"></i> Daftar Pembimbing Lapangan <i class="icon-file icon-big"></i>  </h1>
		</div>
        <div class="row-fluid">

           <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:5%;">No</th>
                  <th style="text-align:center; width:15%;">Nama</th>
				  <th style="text-align:center;width:10%;">ID</th>
                  <th style="text-align:center;width:15%;">email</th>
				  <th style="text-align:center;width:25%;">Kelompok yang Sedang di Bimbing</th>
                  <th style="text-align:center;width20%;">Foto</th>
				  <th style="text-align:center;width:5%;">Manage</th>
                  
                </tr>
              </thead>
              <tbody>
				  <tr>
				  <td style="text-align:center;">1</td>
                  <td style="text-align:center;">Santi Herawan</td>
				  <td style="text-align:center;">P00001</td>
				  <td style="text-align:center;">santiherawan@office.com</td>
                  <td style="text-align:center;">O001K008 <br> Nama Anggota Kelompok: <br> Bunga Citra <br>  Jasmin Lasandra </td>
				  <td style="text-align:center;">
					<div class="preview">
                    <img alt=" " src="<?php echo base_url();?>/assets/images/portfolio/thumb/santi.png"  style="width:200px;height:auto;">
                    <div class="overlay">
                    </div>
                    
                </div>
                <div class="desc">
                    
                </div>
                <div id="modal-7" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    
                </div>            
				  </td>
				  <td style="text-align:center;">
					<a data-toggle="modal" href="#updatejobForm">Edit</a>
					<a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
				  </td>
                  <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">Hermawan Sangkono</td>
                  <td style="text-align:center;">P00002</td>
                  <td style="text-align:center;">wawans@office.com</td>
                  <td style="text-align:center;">O001K0010 <br> Nama Anggota Kelompok: <br> Sandi Ahmad <br>  Budi Raharjo </td>
                  <td style="text-align:center;">
                    <div class="preview">
                    <img alt=" " src="<?php echo base_url();?>/assets/images/portfolio/thumb/wawan.jpg"  style="width:200px;height:auto;">
                    <div class="overlay">
                    </div>
                </div>
                <div class="desc">
                    
                </div>
                <div id="modal-7" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    
                </div>            
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
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
        <center><h3>Tambahkan Pembimbing Lapangan</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
	<form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <p>
                &nbsp;Nama Pegawai:
				&nbsp;<input type="text" id="nama_beasiswa" class="input-small"  name="namabeasiswa">
            </p>
            <br>
             <p>
                &nbsp;Jabatan:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Jabatan---</option>
                    <option value="10001"> HRD </option>
                    <option value="10002"> IT </option>
                    <option value="10003"> Support </option>
                </select>
            </p> 
			<br>
			 <p>
                &nbsp;Email:
				&nbsp;<input type="text" id="besar_beasiswa" class="input-small"  name="besarbeasiswa">
            </p> 
			<br>
            <p>
                &nbsp;Kelompok yang Dibimbing:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Kelompok Kerja Praktek---</option>
                    <option value="10001"> O001K001 - Bambang dan Ari</option>
                    <option value="10002"> O001K002 - Lisa dan Eri </option>
                    <option value="10003"> O001K003 - Thomas dan Eggy </option>
                </select>
            </p> 
            <br>
                &nbsp;Foto:
				&nbsp;<input type="file" id="beasiswa" class="input-small"  name="posterbeasiswa">
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
<div class="modal hide fade in" id="updatejobForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h3>Edit Data Pegawai Lapangan</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
	<form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <p>
                &nbsp;Nama Pegawai:
                &nbsp;<input type="text" id="nama_beasiswa" class="input-small"  name="namabeasiswa">
            </p>
            <br>
             <p>
                &nbsp;Jabatan:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Jabatan---</option>
                    <option value="10001"> HRD </option>
                    <option value="10002"> IT </option>
                    <option value="10003"> Support </option>
                </select>
            </p> 
            <br>
             <p>
                &nbsp;Email:
                &nbsp;<input type="text" id="besar_beasiswa" class="input-small"  name="besarbeasiswa">
            </p> 
            <br>
            <p>
                &nbsp;Kelompok yang Dibimbing:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Kelompok Kerja Praktek---</option>
                    <option value="10001"> O001K001 - Bambang dan Ari</option>
                    <option value="10002"> O001K002 - Lisa dan Eri </option>
                    <option value="10003"> O001K003 - Thomas dan Eggy </option>
                </select>
            </p> 
            <br>
                &nbsp;Foto:
                &nbsp;<input type="file" id="beasiswa" class="input-small" name="posterbeasiswa">
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
<div class="modal hide fade in" id="deleteJob" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
      
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <center><form class="form-inline" action="<?=base_url();?>index.php/mengelolabeasiswa/mengelolabeasiswa" method="post" id="deleteJob">
			<h3 style="color:red">Apakah anda yakin ingin menghapus pembimbing lapangan ini?</h3>
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
