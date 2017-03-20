  <!DOCTYPE html>
  <html>
  <title>Innostore</title>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('media/css/materialize.min.css'); ?>"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/dl.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/image-map-pro.css'); ?>">
      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
      <style>
.imp-wrap{
    width: 90% !important;
    height: auto !important; 
        }
      </style>
     
    </head>

    <body>
    
     <div class="navbar-fixed">
      <nav>
        <a href="<?php echo base_url(""); ?>" class="brand-logo"></a>
          <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(""); ?>">HOME</a></li>
              <?php if ($this->session->userdata('login')){ ?>
              <li style="text-transform: capitalize;"><a href="<?php echo base_url("index.php/profile"); ?>"><i class="material-icons right" ></i><?php echo $this->session->userdata('fname'); ?></a></li>
              <?php } else { ?>
                <li><a href="#modal1">LOGIN</a></li>
                <?php } ?>
                <li><a href="#working" style="background-color: #EDE7C7;">GET STARTED</a></li>
                <!-- Dropdown Trigger -->
                <!--li><a class='dropdown-button' href='#' data-activates='dropdown2'>Sign In </a>
                <!-- Dropdown Structure -->
                  <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="#">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Employer</a></li>
                  </ul>
                </li-->
          </ul>
          <ul id="slide-out" class="side-nav">
            <li><a href="#">HOME</a></li>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#working" style="background-color: #EDE7C7;">GET STARTED</a></li>
                <!-- Dropdown Trigger -->
                <!--li><a class='dropdown-button' href='#' data-activates='dropdown1'>Sign In </a>
                <!-- Dropdown Structure -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Employer</a></li>
                  </ul>
                </li-->
          </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </nav>
   
    </div>
  </div>









<!-- login-->


  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
        <div class="col s6">MANAGE YOUR ORDERS Track orders, manage cancellations & returns.<br/>

MANAGE YOUR ORDERS Track orders, manage cancellations & returns.<br/>

MANAGE YOUR ORDERS Track orders, manage cancellations & returns.
      </div>
      <div class="col s6"><form action="index.php" method="post"><input type="text" placeholder="username">
        <input type="text" placeholder="password"><br/>
         <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button><br/>or login with  <br/>
        <button class="btn waves-effect waves-light" type="submit" name="action">facebook
    <i class="material-icons right">send</i>
  </button>
      </form><br/>
        </div>
      
      </div>
      
        
    </div>
  </div>

<!--login end -->