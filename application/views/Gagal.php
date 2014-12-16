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
    <form><h3 style="color:red" class="alert"><i class="icon-file icon-big"></i> Data Gagal di Simpan</h3> </form>  

    <a class="pull-right" data-toggle="modal" href="#insertjobForm"><i class="icon-plus icon-medium"></i>Tambahkan Beasiswa Baru</a>
        <div class="center gap">
            <h1><i class="icon-file icon-big"></i> Daftar Beasiswa <i class="icon-file icon-big"></i>  </h1>
        </div>
        <div class="row-fluid">

           <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center; width:10px;">No</th>
                  <th style="text-align:center;">Nama</th>
                  <th style="text-align:center;width:50px;">ID</th>
                  <th style="text-align:center;">Sumber</th>
                  <th style="text-align:center;">Deskripsi</th>
                  <th style="text-align:center;">Besar</th>
                  <th style="text-align:center;">Deadline</th>
                  <th style="text-align:center;">Poster</th>
                  <th style="text-align:center;">Manage</th>
                  
                </tr>
              </thead>
              <tbody>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Beasiswa KSE (Karya Salemba Empat)</td>
                  <td style="text-align:center;width:120px;">000001</td>
                  <td style="text-align:center;width:150px">Karya Salemba Empat</td>
                  <td style="text-align:center;">S1, Training</td>
                  <td style="text-align:center;">500.000 / bulan</td>
                  <td style="text-align:center;">23 Mei 2014 </td>
                  <td style="text-align:center;">
                    <div class="preview">
                    <img alt=" " src="<?php echo base_url();?>/assets/images/portfolio/thumb/kse.jpg"  style="width:200px;height:auto;">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-7"><i class="icon-eye-open"></i></a><a href="http://hmtc.if.its.ac.id/penawaran-beasiswa-kse-karya-salemba-empat/"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    
                </div>
                <div id="modal-7" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="<?php echo base_url();?>/assets/images/portfolio/full/kse.jpg" alt=" " width="100%">
                    </div>
                </div>            
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">2</td>
                  <td style="text-align:center;">TC09 Batavia Scholarship</td>
                  <td style="text-align:center;width:120px;">000002</td>
                  <td style="text-align:center;width:150px">Alumni TC09</td>
                  <td style="text-align:center;">angkatan khusus</td>
                  <td style="text-align:center;">1.800.000 / semester</td>
                  <td style="text-align:center;">31 mei 2014 </td>
                  <td style="text-align:center;width:150px;">
                        <div class="preview">
                    <img alt=" " src="<?php echo base_url();?>/assets/images/portfolio/thumb/tc09.png" style="width:200px;height:auto;">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-8"><i class="icon-eye-open"></i></a><a href="http://hmtc.if.its.ac.id/tc09-batavia-scholarship/"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                </div>
                <div id="modal-8" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="<?php echo base_url();?>/assets/images/portfolio/full/tc09.png" alt=" " width="100%"   >
                    </div>
                </div>                
                  
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                    <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/pertamina-pheon.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-9"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    
                </div>
                <div id="modal-9" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/pertamina-pheon.jpg" alt=" " width="100%"   >
                    </div>
                </div>                
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                    <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/jakartapost.png">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-10"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
                <div class="desc">
                    
                </div>
                <div id="modal-10" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/jakartapost.png" alt=" " width="100%"   >
                    </div>
                </div>               
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                  
                        <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/djavaweb.jpg">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-12"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                    </div>
                </div>
              
                </div>
                <div id="modal-12" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="images/portfolio/full/djavaweb.jpg" alt=" " width="100%"   >
                    </div>
                </div>                 
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                                <div class="preview">
                                    <img alt=" " src="images/portfolio/thumb/alvinphotography.jpg">
                                    <div class="overlay">
                                    </div>
                                    <div class="links">
                                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                                    </div>
                                </div>
                                <div class="desc">
                                    
                                </div>
                                <div id="modal-4" class="modal hide fade">
                                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                                    <div class="modal-body">
                                        <img src="images/portfolio/full/alvinphotography.jpg" alt=" " width="100%" >
                                    </div>
                                </div>                      
                            
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                            <div class="preview">
                            <img alt=" " src="images/portfolio/thumb/woroworo2.jpg">
                            <div class="overlay">
                            </div>
                            <div class="links">
                                <a data-toggle="modal" href="#modal-2"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                            </div>
                        </div>
                        <div class="desc">
                            
                        </div>
                        <div id="modal-2" class="modal hide fade">
                            <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                            <div class="modal-body">
                                <img src="images/portfolio/full/woroworo2.jpg" alt=" " width="100%" >
                            </div>
                        </div>                 
                                    
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                                 <div class="preview">
                                    <img alt=" " src="images/portfolio/thumb/woroworo1.png">
                                    <div class="overlay">
                                    </div>
                                    <div class="links">
                                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                                    </div>
                                </div>
                                <div class="desc">
                                    
                                </div>
                                <div id="modal-1" class="modal hide fade">
                                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                                    <div class="modal-body">
                                        <img src="images/portfolio/full/woroworo1.png" alt=" " width="100%" >
                                    </div>
                                </div>                 
           
                            
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  
                  <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                            <div class="preview">
                                <img alt=" " src="images/portfolio/thumb/chocoart.jpg">
                                <div class="overlay">
                                </div>
                                <div class="links">
                                    <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                                </div>
                            </div>
                            <div class="desc">
                            
                            </div>
                            <div id="modal-3" class="modal hide fade">
                                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                                <div class="modal-body">
                                    <img src="images/portfolio/full/chocoart.jpg" alt=" " width="100%">
                                </div>
                            </div>                      
           
                            
                  </td>
                  <td style="text-align:center;">
                    <a data-toggle="modal" href="#updatejobForm">Edit</a>
                    <a data-toggle="modal" href="#deleteJob" style="color:red">Delete</a>
                  </td>
                  
                    <tr>
                  <td style="text-align:center; width:10px;">1</td>
                  <td style="text-align:center;">Lets Make A Game</td>
                  <td style="text-align:center;width:120px;">1100</td>
                  <td style="text-align:center;width:150px">Woro Woro Game Studio</td>
                  <td style="text-align:center;">For Programmer, Illustrator</td>
                  <td style="text-align:center;">
                             <div class="preview">
                            <img alt=" " src="images/portfolio/thumb/hsbc.jpg">
                            <div class="overlay">
                            </div>
                            <div class="links">
                                <a data-toggle="modal" href="#modal-5"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                                
                            </div>
                        </div>
                        <div class="desc">
                        </div>
                        <div id="modal-5" class="modal hide fade">
                            <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                            <div class="modal-body">
                                <img src="images/portfolio/full/hsbc.jpg" alt=" " width="100%"   >
                            </div>
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
        <center><h3>Tambahkan Beasiswa</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
    <form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/submit" method="post" id="form-insertjob">
            <p>
                &nbsp;Nama Beasiswa:
                &nbsp;<input type="text" id="nama_beasiswa" class="input-small" placeholder="Nama Beasiswa" name="namabeasiswa">
            </p>
            <br>
             <p>
                &nbsp;Sumber Beasiswa:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Sumber Beasiswa---</option>
                    <option value="10001"> Karya Salemba Empat </option>
                    <option value="10002"> TC09 </option>
                    <option value="10003"> Djarum Beasiswa Plus </option>
                </select>
            </p> 
            <br>
             <p>
                &nbsp;Besar Beasiswa:
                &nbsp;<input type="text" id="besar_beasiswa" class="input-small" placeholder="Besar Beasiswa" name="besarbeasiswa">
            </p> 
            
            <br>
            <p>
                &nbsp;Deadline Beasiswa:
                &nbsp;<input type="date" id="deadline_beasiswa"class="input-small" placeholder="Deadline Beasiswa" name="deadlinebeasiswa">
            </p>
             
            <br>
            <p>
                &nbsp;Deskripsi Beasiswa:
                &nbsp;<input type="text" id="deskripsi_beasiswa" class="input-small" placeholder="Deskripsi Beasiswa" name="deskripsibeasiswa">
            </p> 
            <br>
            <p>
                &nbsp;Poster:
                &nbsp;<input type="file" id="beasiswa" class="input-small" placeholder="Poster" name="posterbeasiswa">
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
        <h3>Update Beasiswa</h3></center>
    </div>
    <!--Insert Body-->
    <div class="modal-body">
    <form style="padding-left:100px;" class="form" action="<?=base_url();?>index.php/mengelolabeasiswa/update" method="post" id="form-insertjob">
            <p>
                &nbsp;Nama Beasiswa:
                &nbsp;<input type="text" id="nama_beasiswa" class="input-small" placeholder="Nama Beasiswa" name="namabeasiswa">
            </p>
            <br>
             <p>
                &nbsp;Sumber Beasiswa:
                &nbsp;<select name="idsumberbeasiswa">
                    <option value="">---Pilih Sumber Beasiswa---</option>
                    <option value="10001"> Karya Salemba Empat </option>
                    <option value="10002"> TC09 </option>
                    <option value="10003"> Djarum Beasiswa Plus </option>
                </select>
            </p> 
            <br>
             <p>
                &nbsp;Besar Beasiswa:
                &nbsp;<input type="text" id="besar_beasiswa" class="input-small" placeholder="Besar Beasiswa" name="besarbeasiswa">
            </p> 
            
            <br>
            <p>
                &nbsp;Deadline Beasiswa:
                &nbsp;<input type="date" id="deadline_beasiswa"class="input-small" placeholder="Deadline Beasiswa" name="deadlinebeasiswa">
            </p>
             
            <br>
            <p>
                &nbsp;Deskripsi Beasiswa:
                &nbsp;<input type="text" id="deskripsi_beasiswa" class="input-small" placeholder="Deskripsi Beasiswa" name="deskripsibeasiswa">
            </p> 
            <br>
            <p>
                &nbsp;Poster:
                &nbsp;<input type="file" id="beasiswa" class="input-small" placeholder="Poster" name="posterbeasiswa">
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
            <h3 style="color:red">Apakah anda yakin ingin menghapus beasiswa ini?</h3>
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
