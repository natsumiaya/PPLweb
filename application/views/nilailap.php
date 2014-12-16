<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Pembimbing Lapangan | SI KP</title>
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
<script type="text/javascript">

    function submitAction(act) {
         document.sample.action = act;
         document.sample.submit();

    }
    </script>
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
                        <li><a href="#" >Memberi Tugas</a></li>
                        <li><a href="#" >Memberi Nilai</a></li>
                        <li class="">
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
                    <h1><i class="icon-rocket icon-big"></i> Memberi Nilai</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="Home.php">Pembimbing Lapangan</a> <span class="divider">/</span></li>
                
                        <li class="active">Memberi Nilai KP</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="container">
		
        <div class="center gap">
			<h1><i class="icon-text icon-big"></i> Daftar Mahasiswa KP <i class="icon-text icon-big"></i>  </h1>
		</div>
        <div class="row-fluid">
          <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:10px;">No</th>
                  <th style="text-align:center;">Nama Mahasiswa</th>
                  <th style="text-align:center;">ID Kelompok</th>
                  <th style="text-align:center;">Beri Nilai</th>
                </tr>
              </thead>
              <tbody>
          <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Bunga Citra</td>
                  <td style="text-align:center;">O001K001 </td>
                  <td style="text-align:center;">
                     <a data-toggle="modal" href="#validberkas">Beri Nilai</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">2</td>
                  <td style="text-align:center;">Jasmin Lasandra</td>
                  <td style="text-align:center;">O001K001 </td>
                  <td style="text-align:center;">
                     <a data-toggle="modal" href="#validberkas">Beri Nilai</a>
                  </td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">3</td>
                  <td style="text-align:center;">Sandi Ahmad</td>
                  <td style="text-align:center;"> O001K002 </td>
                  <td style="text-align:center;">
                     <a data-toggle="modal" href="#validberkas">Beri Nilai</a>
                  </td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">4</td>
                  <td style="text-align:center;">Budi Raharjo</td>
                  <td style="text-align:center;"> O001K002 </td>
                  <td style="text-align:center;">
                     <a data-toggle="modal" href="#validberkas">Beri Nilai</a>
                  </td>
                  </tr>
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
<div class="modal hide fade in" id="validberkas" aria-hidden="false">
 <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <center><h3>Beri Nilai</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
	<form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:10px;">No</th>
                  <th style="text-align:center;">Kriteria Penilaian</th>
                  <th style="text-align:center;">Nilai (dalam angka)</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Absensi</td>
                  <td style="text-align:center;"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">1.1</td>
                  <td style="text-align:center;">Kehadiran Mahasiswa di Perusahaan</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">1.2</td>
                  <td style="text-align:center;">Tepat waktu dalam kehadiran (disiplin)</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">2</td>
                  <td style="text-align:center;">Keterampilan</td>
                  <td style="text-align:center;"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">2.1</td>
                  <td style="text-align:center;">Keterampilan yang dimiliki Mahasiswa</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">2.2</td>
                  <td style="text-align:center;">Penggunaan keterampilan terhadap kepentingan perusahaan</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">3</td>
                  <td style="text-align:center;">Penguasaan Materi</td>
                  <td style="text-align:center;"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">3.1</td>
                  <td style="text-align:center;">Kecepatan dan ketepatan menguasai materi/problem yang disajikan perusahaan</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">3.2</td>
                  <td style="text-align:center;">Tanggapan terhadap permasalahan yang timbul dalam lingkup KP Mahasiswa</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">3.3</td>
                  <td style="text-align:center;">Penggunaan materi yang dikuasai untuk menyelesaikan kerja</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">4</td>
                  <td style="text-align:center;">Kecakapan (dalam berbicara/berkomunikasi)</td>
                  <td style="text-align:center;"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">4.1</td>
                  <td style="text-align:center;">Beradaptasi terhadap lingkungan perusahaan</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">4.2</td>
                  <td style="text-align:center;">Kesopanan dalam berbicara terhadap karyawan dan pimpinan</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">4.3</td>
                  <td style="text-align:center;">Tidak Pasif</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">5</td>
                  <td style="text-align:center;">Hubungan dengan karyawan</td>
                  <td style="text-align:center;"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">5.1</td>
                  <td style="text-align:center;">Tingkah laku dalam bersosialisasi</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
                  <tr>
                  <td style="text-align:center; width:10px;">5.2</td>
                  <td style="text-align:center;">Kemampuan kerjasama</td>
                  <td style="text-align:center;"><input type="text" class="input-small"></td>
                  </tr>
              </tbody>
            </table>
             <input type="submit" class="btn btn-success btn-large" name="button" value="Submit"/>
          </form>  
	

    </div>
    <!--/Modal Body-->
</div>
<!--  /Insert form -->


<script src="<?php echo base_url("assets/js/vendor/jquery-1.9.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

</body>
</html>
