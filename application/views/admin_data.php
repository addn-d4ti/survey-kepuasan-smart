<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Kuisioner Survey</title>
        <!-- <link href="assetsh/gambar/Bg3.png" rel="shortcut icon" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assetsh/theme/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assetsh/theme/usebootstrap.css">

    <?php 
    foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
  </head>
  <!-- <body style="background-image: url('<?php echo base_url() ;?>assetsh/gambar/Bg3a.jpg')"> -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url() ;?>" class="navbar-brand">Sistem Informasi Kuisioner Survey</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
        </div>
      </div>
    </div>
    <div class="page-header" id="banner"> 
      <div class="row col-lg-3">
        <div class="panel panel-info" >
          <div class="panel-heading">
            <h3 class="panel-title">Panel info</h3>
          </div>
          <div class="panel-body">
            <a href="<?php echo base_url() ;?>Datatabel/datapertanyaan" class="list-group-item"> Data Pertanyaan
            </a>
            <a href="<?php echo base_url() ;?>Datatabel/dataresponden" class="list-group-item"> Data Responden
            </a>
            <a href="<?php echo base_url() ;?>" class="list-group-item"> Kembali
            </a>
			<!-- <a href="<?php echo base_url() ;?>Hasil/P1" class="list-group-item">Lihat Hasil -->
			<!-- </a> -->
            <!-- <a href="<?php echo base_url() ;?>Admin/logout" class="list-group-item"> Logout -->
              <!-- </a> -->
          </div>
        </div>
      </div>
   
    

    <div class="container col-lg-9">
        <div class="page-header">
            <h1 id="navbar">Data </h1>
          </div>
      
      <?php echo $output; ?>
      
      
	  
    </div>
    
   


    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<script src="<?php echo base_url() ;?>/assetshome/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ;?>/assetshome/bootstrap/usebootstrap.js"></script>
  </body>
</html>
