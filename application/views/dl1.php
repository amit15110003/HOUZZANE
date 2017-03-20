<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('media/css/materialize.min.css'); ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/image-map-pro.css'); ?>">
    </head>

    <body style="background-color: black;padding-right: 5%;padding-left: 5%;padding-top: 2%;">
    
  <?php
if (isset($data))
{
  
}
else {
  $data=0;
}?>
    <div class="modal-content" style="background-color: #ffffff; height:auto; max-height: 600px;">
      <a href="<?php echo base_url("index.php//home/designlibrary"); ?>" class="right"><i class="material-icons">shuffle</i></a>
      <div class="row">
          <div class="col m9 center">
              <div id="image-map-pro-container" style="height:600px;"></div>
              <!--<img  class="responsive-img center" src="<?php echo base_url(); ?>admin/uploads/<?php echo $picture; ?>">-->
          </div>
          <div class="col m3" style="padding-left:2%;">
          <h style=" color: #ffab40; font-size: 15px; font-weight: bold; ">Architect: <?php echo $architect; ?></h>

          <p style="font-size: 12px;" >
          <?php
          $i=0;
          while ($rate>$i){
          echo"<i class='material-icons' style='color: #ffab40;'>star</i>";
          $i=$i+1;  }
          ?>
          rating</p>
          <div style="border-top: solid 1px; border-color: #ffab40"></div>
          <h style=" color: #ffab40; font-size: 15px; font-weight: bold;"">Space: <?php echo $space; ?></h>
          <p></p>
           <h style=" color: #ffab40; font-size: 15px; font-weight: bold;"">Description: <?php echo $descr; ?></h>
          <p></p> 
          </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('media/js/materialize.min.js')?>"></script>
    
      
      <script src="<?php echo base_url('media/lib/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('media/js/image-map-pro.js'); ?>"></script>
      <script src="js/jquery.min.js"></script>
    <script src="js/image-map-pro.min.js"></script>
    <script type="text/javascript">
        ;(function ($, window, document, undefined) {
            $(document).ready(function() {
           <?php echo $map; ?>   
     });
        })(jQuery, window, document);
    </script>
</body>
</html>