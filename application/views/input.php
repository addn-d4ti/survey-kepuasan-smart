<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Kuisioner Survey</title>
        <!-- <link href="assetsh/gambar/Bg3.png" rel="shortcut icon" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assetsh/theme/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assetsh/theme/usebootstrap.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url("user") ;?>/" class="navbar-brand">Sistem Informasi Kuisioner Survey</a>
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
  
    <div class="container">
   
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms"><center>Formulir Kuisioner Survey<center></h1>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-12">
            <form class="form-horizontal" action="<?php echo base_url()?>input/form_validation" method="post">
              <div class="form-group">
            <label for="inputEmail" class="col-lg-2">Nama</label>
            <div class="col-lg-12">
              <input type="text" class="form-control" name="responden">
			  <div class="form-group">
			<label for="inputEmail" class="col-lg-2">Kelas</label>
            <div class="col-lg-12">
              <input type="text" class="form-control" name="">
			  <div class="form-group">
			<label for="inputEmail" class="col-lg-2">NIM</label>
            <div class="col-lg-12">
              <input type="number" class="form-control" name="">
            
			</div>
			</div>
			</div>
          </div>
           <?php
      
                foreach($fetch_data2->result() as $row)
                {
             ?>   
                <fieldset>       
                  <div id="p<?php echo $row->id; ?>" class="form-group">
                    <div class="col-lg-10">
                  <p><?php echo $row->pertanyaan; ?> ?</p>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p<?php echo $row->id; ?>" id="p<?php echo $row->id; ?>" value="<?php echo $row->isi1; ?>">
                          <?php echo $row->isi1; ?>
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p<?php echo $row->id; ?>" id="p<?php echo $row->id; ?>" value="<?php echo $row->isi2; ?>">
                          <?php echo $row->isi2; ?>
                        </label>
                     </div>
                     <div class="radio">
                        <label>
                          <input type="radio" name="p<?php echo $row->id; ?>" id="p<?php echo $row->id; ?>" value="<?php echo $row->isi3; ?>">
                          <?php echo $row->isi3; ?>
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="p<?php echo $row->id; ?>" id="p<?php echo $row->id; ?>" value="<?php echo $row->isi4; ?>">
                          <?php echo $row->isi4; ?>
                        </label>
                     </div>                      
                    </div>              
                    </div>
                  
                </fieldset>
                <?php
                 }
                        
            ?>               
              <div class="form-group">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
           </form>   
           
            </div>
          </div>
          <a href="<?php echo base_url() ;?>/"><button class="btn btn-default">Tidak Jadi</button></a>
      </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url() ;?>/assetsh/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ;?>/assetsh/bootstrap/usebootstrap.js"></script>
  </body>
</html>
