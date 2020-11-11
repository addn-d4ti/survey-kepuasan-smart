<html lang="en">
<!--  git init 
git add . 
git commit -m "first commit" 
git remote add origin https://github.com/mariapujirahayu/Kantin-CJ-Feed
git push -u origin master-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Kantin CJ Feed</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
  <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Averia Gruesa Libre' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bai Jamjuree' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>
<body>
    
<header id="header">
  <nav class="navbar navbar-default navbar-static-top fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand">
          <a href="index.php"><img src="<?php echo base_url('assets/img/cj.png')?>" style="font-family: 'Aclonica'; margin-top: 0px; height:50px; width:70px"></a>
          <h1>PT. CJ Feed Jombang</h1>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="<?php echo base_url("user") ;?>">Home</a></li>
            <li><a href="<?php echo base_url("home") ;?>">Kuisioner</a></li>
            <li><a href="<?php echo base_url() ;?>">admin</a></li>              
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>