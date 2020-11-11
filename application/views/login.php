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
    <script src="<?php echo base_url() ;?>/assetsh/js/Chart.min.js"></script>
  </head>
  <link href="css_login/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="css_login/bootstrap.min.js"></script>
<script src="css_login/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>


<style class="cp-pen-styles">html, body {
  border: 0;
  padding: 0;
  margin: 0;
  height: 100%;
}

body {
  
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
}

form {
  background: white;
  width: 40%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
}
form header {
  background: rgb(41, 165, 187);
  padding: 30px 20px;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  border-radius: 10px 10px 0 0;
}
form label {
  margin-left: 20px;
  display: inline-block;
  margin-top: 30px;
  margin-bottom: 5px;
  position: relative;
}
form label span {
  color: rgb(41, 165, 187);
  font-size: 2em;
  position: absolute;
  left: 2.3em;
  top: -10px;
}
form input {
  display: block;
  width: 78%;
  margin-left: 20px;
  padding: 5px 20px;
  font-size: 1em;
  border-radius: 3px;
  outline: none;
  border: 1px solid #ccc;
}
form .help {
  margin-left: 20px;
  font-size: 0.8em;
  color: #777;
}
form button {
  position: relative;
  margin-top: 30px;
  margin-bottom: 30px;
  left: 50%;
  transform: translate(-50%, 0);
  font-family: inherit;
  color: white;
  background: rgb(41, 165, 187);
  outline: none;
  border: none;
  padding: 5px 15px;
  font-size: 1.3em;
  font-weight: 400;
  border-radius: 3px;
  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
  cursor: pointer;
  transition: all 0.15s ease-in-out;
}
form button:hover {
  background: #ff5252;
}

</style></head><body>

<form action="<?php echo base_url(); ?>Admin/login_validation" method="POST">
<h2><?php  
    echo '<label class="text-danger">'.$this->session->flashdata
                          ("error").'</label>';  
    ?></h2>
  <header>Silahkan Masukan Username dan Password Anda </header>
  <label>Username <span>*</span></label>
  <input type="text" class="form-control" name="nama_user"  required="required">
  <span class="text-danger"><?php echo form_error("nama_user"); ?></span>
  <label>Password <span>*</span></label>
  <input type="password" class="form-control" name="password"  required="required">
  <span class="text-danger"><?php echo form_error("password"); ?></span>
  
  <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
    
</form>


</body></html>