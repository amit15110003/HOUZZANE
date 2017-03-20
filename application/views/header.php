<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('media/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('media/css/style.css" rel="stylesheet'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('media/css/d1.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('media/css/d2.css'); ?>" type="text/css">
  </head>
  <body>
    <!--navbar-->
    <div class="navbar nav-inb  navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          Houzzane
        </div>
        <ul class="nav navbar-nav">
          <?php if ($this->session->userdata('login')){ ?>
          <li class="active"><a href="<?php echo base_url("index.php/home/designlibrary"); ?>">Design Library</a></li>
          <li class="active"><a href="#">Refurbish Labs</a></li>
          <li class="active"><a href="#">How It Works</a></li>
          <li><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right" ></i><?php echo $this->session->userdata('uname'); ?></a></li>
          <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Log Out</a></li>
          <?php } else { ?>
          <li class="active"><a href="<?php echo base_url("index.php/home/designlibrary"); ?>">Design Library</a></li>
          <li class="active"><a href="#">Refurbish Labs</a></li>
          <li class="active"><a href="#">How It Works</a></li>
          <li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li>
          <li><a href="<?php echo base_url("index.php/signup"); ?>">Signup</a></li>
        <?php } ?>
          <li class="active"><a href="#">Get Started</a></li>
        </ul>
      </div>
    </div>