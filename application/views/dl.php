  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('media/css/materialize.min.css'); ?>"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/dl.css'); ?>">

      <!--Let browser know website is optimized for mobile-->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
    </head>

    <body>
     <div class="navbar-fixed">
      <nav>
        <a href="#" class="brand-logo">TalentCurry</a>
          <ul class="right hide-on-med-and-down">
              <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#working">How it works?</a></li>
                <!-- Dropdown Trigger -->
                <li><a class='dropdown-button' href='#' data-activates='dropdown2'>Sign In </a>
                <!-- Dropdown Structure -->
                  <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="#">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Employer</a></li>
                  </ul>
                </li>
          </ul>
          <ul id="slide-out" class="side-nav">
            <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#working">How it works?</a></li>
                <!-- Dropdown Trigger -->
                <li><a class='dropdown-button' href='#' data-activates='dropdown1'>Sign In </a>
                <!-- Dropdown Structure -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Employer</a></li>
                  </ul>
                </li>
          </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </nav>
      </div>

    <!-- Navigation Bar -->
<!--     <div class="navbar-fixed">
      <nav>
        <a href="#" class="brand-logo">TalentCurry</a>
          <ul class="right hide-on-med-and-down">
              <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#working">How it works?</a></li>
                <li><a class='dropdown-button' href='#' data-activates='dropdown2'>Sign In </a>
                  <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="#">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Employer</a></li>
                  </ul>
                </li>
          </ul>
          <ul id="slide-out" class="side-nav">
            <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#working">How it works?</a></li>
                <li><a class='dropdown-button' href='#' data-activates='dropdown1'>Sign In </a>
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Employer</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Employer</a></li>
                  </ul>
                </li>
          </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </nav>
      </div> -->

      <!--banner section -->
      <div class="parallax-container">
        <div class="parallax bg-wrap"></div>
        <div class="center-align heading"><span>INNOLYF DESIGN LIBRARY</span></div>
        <div class="parallax"><img class="responsive-img" src="<?php echo base_url('media/img/banner_2.jpg'); ?>"></div>
      </div>
      <!-- banner section ends -->

      <!-- Lib sec starts -->
      <!-- <section class="margin-ib">
        <div class="container">
          <div class="row">
            <div class="col l4 offset-l box1 "></div>
            <div class="col l4 offset-l0 box2">
              <div class=" col l12 header-background-gradient"></div>
              <div class=" header-background-left-gradient"></div>
              <div class="header-background-right-gradient"></div>
              <img class="responsive-img" src="img/sample.jpg">
              <div class="col l12" style="height: 50px;background-color: white;"></div>
            </div>
            <div class="col l4 offset-l0 box3"></div>
          </div>
        </div>
      </section -->
      <!-- lib sec ended -->


      <!-- lib full section-->
<!--       <section class="margin-ib">
        <div class="container">
          <div class="row">
            <div class="col l12 box4">
              <i class="material-icons view-ib">add<p>1234</p></i>
              <div class=" col l12 header-background-gradient-l"></div>
              <div class=" header-background-left-gradient-l"></div>
              <div class="header-background-right-gradient-l"></div>
              <img class="responsive-img" src="img/banner_2.jpg">
              <div class="col l12" style="height: 50px;background-color: white;"></div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- lib full section ended-->

        <div class="container">
        <br><br><br>
          <!--<div class="row">
          <?php
              foreach( $query2 as $row)
                {?>
            <div class="col s12 m12 l4 card-1-ib">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="<?php echo base_url(); ?>/uploads<?php echo $row->picture; ?>">
                </div>
                <div class="card-content">
                  <p><?php echo $row->space; ?></p>
                </div>
              </div>
            </div>
          <?php }?>
            <div class="col s12 m12 l4 card-2-ib" >
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="img/sample.jpg">
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>

            <div class="col s12 m12 l4 card-3-ib">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="img/sample.jpg">
                </div>
                <div class="card-content">
                <ul style="display: -webkit-inline-box;">
                  <li><i id="icon" class="material-icons">keyboard_arrow_down</i></li>
                  <li><a href="#">Interior</a></li>
                  <li class="right"><p>1212</p></li>
                  <li class="right"><i id="icon" class="material-icons">keyboard_arrow_down</i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>-->

          <div class="row">
          <div class="filtersearch">
            <?php
            $i=1;
              foreach( $query2 as $row)
                {?>
              <?php 
              
              if($i%7!=0)
              {$i=$i+1;
                ?>
            <div data-category='<?php echo $row->type; ?> <?php echo $row->space; ?> <?php echo $row->category; ?>'>
            <div class="col s12 m4 filter" style="padding-top: 2%;padding-right: 2%;" data-id='<?php echo $row->id; ?>'>
              <div class="card">
                <div class="card-image">
                  <img  class="responsive-img" src="<?php echo base_url(); ?>admin/uploads/<?php echo $row->picture; ?>">
                </div>
                <div class="card-content ">
                  <p>
                    <?php echo $row->category; ?>
                    <?php echo $row->title; ?>
                    <?php echo $row->type; ?>
                    <?php echo $row->space; ?>
                  </p>
                </div>
                <div class="card-action">
                  <a href="<?php echo base_url().'index.php/home/library/'.$row->id; ?>"><i class="material-icons">visibility</i> <?php echo $row->view; ?> </a>
                  <a href="<?php echo base_url().'index.php/home/shortlist/'.$row->id ?>"><i class="material-icons">book</i></a>
                </div>
              </div>
            </div>
            </div>
            <?php }else{$i=$i+1; ?>

            <div data-category='<?php echo $row->type; ?> <?php echo $row->space; ?> <?php echo $row->category; ?>'>
            <div class="col s12 m12 l12 filter" style="padding-top: 2%;padding-right: 2%;" data-id='<?php echo $row->id; ?>'>
              <div class="card">
                <div class="card-image">
                  <img  class="responsive-img" src="<?php echo base_url(); ?>admin/uploads/<?php echo $row->picture; ?>" >
                </div>
                <div class="card-content ">
                  <p>
                    <?php echo $row->category; ?>
                    <?php echo $row->title; ?>
                    <?php echo $row->type; ?>
                    <?php echo $row->space; ?>
                  </p>
                </div>
                <div class="card-action">
                  <a href="#modal<?php echo $row->id; ?>" class="eye" id="<?php echo $row->id; ?>"><i class="material-icons">visibility</i></a>
                  <span class="counter"><?php echo $row->view;?></span>
                </div>

              </div>
            </div>
            </div>
            <?php }?>
            <?php }?>
          </div>
          </div>
        </div>

      <!-- filters container -->
      <div class="row">
        <div class="filters-container">
          <div class="col l1 center-align" style="background-color: #f4f4f4;border-right: 1px solid #e6e6e6;"><span>Filters</span></div>
          <!--type filter-->
          <div id="type1" class="col l2 center-align btn-listing" style="padding:0px ;border-right: 1px solid #e6e6e6;">
          <div class="row">
              <div class="col l6"><span class="right">Category</span></div>
              <div class="col l6" style="padding-top: 10px;"><i id="icon" class="material-icons icons-ib left">keyboard_arrow_down</i></div>
            </div>
            <div id="options_ty" class="drop-body-ib">
              <div>
               <div class="category-wrap">
              <form><?php
              foreach( $query as $row)
                {?>
                <div>
                  <input type="checkbox" class="filled-in" id='<?php echo $row->category; ?>' />
                  <label for='<?php echo $row->category; ?>'><?php echo $row->category; ?></label>
                </div>
                <?php }?>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!--type filter ends-->

          <!--architects filter -->
          <div id="type2" class="col l2 center-align btn-listing" style=" padding:0px ;border-right: 1px solid #e6e6e6;">
            <div class="row">
              <div class="col l6"><span class="right">Type</span></div>
              <div class="col l6" style="padding-top: 10px;"><i id="icon" class="material-icons icons-ib left">keyboard_arrow_down</i></div>
            </div>
            <div id="options_ar" class="drop-body-ib">
              <div>
               <div class="type-wrap">
              <form>
                <?php
              foreach( $query4 as $row)
                {?>
                <div>
                  <input type="checkbox" class="filled-in" id='<?php echo $row->type; ?>' />
                  <label for='<?php echo $row->type; ?>'><?php echo $row->type; ?></label>
                </div>
                <?php }?>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!--Architects filter ends-->

          <!--Spaces filter-->
          <div id="type3" class="col l2 center-align btn-listing" style=" padding:0px ;border-right: 1px solid #e6e6e6;">
            <div class="row">
              <div class="col l6"><span class="right">Spaces</span></div>
              <div class="col l6" style="padding-top: 10px;"><i id="icon" class="material-icons icons-ib left">keyboard_arrow_down</i></div>
            </div>
            <div id="options_sp" class="drop-body-ib">
              <div>
               <div class="space-wrap">
              <form>
              <?php
              foreach( $query3 as $row)
                {?>
                <div>
                  <input type="checkbox" class="filled-in" id='<?php echo $row->space; ?>' />
                  <label for='<?php echo $row->space; ?>'><?php echo $row->space; ?></label>
                </div>
                <?php }?>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!--Spaces filter ends-->
        </div>
      </div>



       <?php
              foreach( $query2 as $row)
        {?>
      <div id="modal<?php echo $row->id; ?>" class="modal" style="max-height: 100%; width: 90%; margin-top: -60px;">
    <div class="modal-content">
      <div class="row">
          <div class="col m9">
            <div class="card-image">
              <img  class="responsive-img" src="<?php echo base_url(); ?>admin/uploads/<?php echo $row->picture; ?>" style="height:580px; ">
            </div>
          </div>
          <div class="col m3" style="padding-left:2%;">
          <h style=" color: #ffab40; font-size: 15px; font-weight: bold; ">Architect</h>
          <p style="font-size: 12px;" ><i class="material-icons" style=" color: #ffab40;">star</i>  rating</p>
          <div style="border-top: solid 1px; border-color: #ffab40"></div>
          <h style=" color: #ffab40; font-size: 15px; font-weight: bold;"">Space</h>
          <p></p>
           <h style=" color: #ffab40; font-size: 15px; font-weight: bold;"">Description</h>
          <p></p> 
          </div>
      </div>
    </div>
  </div>
 <?php }?>



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('media/js/materialize.min.js')?>"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.parallax').parallax();
          $("#options_ty").hide();
          $("#options_ar").hide();
          $("#options_sp").hide();
        });
      </script>
      <script type="text/javascript">
        $("#type1").mouseover(function(){
            $("#options_ty").show();
        });
        $("#type1").mouseout(function(){
            $("#options_ty").hide();
        });
      </script>
      <script type="text/javascript">
        $("#type2").mouseover(function(){
            $("#options_ar").show();
        });
        $("#type2").mouseout(function(){
            $("#options_ar").hide();
        });
      </script>
      <script type="text/javascript">
        $("#type3").mouseover(function(){
            $("#options_sp").show();
        });
        $("#type3").mouseout(function(){
            $("#options_sp").hide();
        });
      </script>
      <script type="text/javascript">
        $("#type3").mouseover(function(){
            $("#icon").animate({-ms-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);});
        });
        $("#type3").mouseover(function(){
            $("#options_sp").show();
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      </script>

     


      <script type="text/javascript">
        $('.category-wrap, .type-wrap, .space-wrap').delegate('input[type=checkbox]', 'change', function() {
          var $lis = $('.filtersearch > div'),
            $checked = $('input:checked');  
          if ($checked.length) {              
                        var selector = '';
                        $($checked).each(function(index, element){
              if(selector === '') {
                selector += "[data-category~='" + element.id + "']";                  
              } else {
                selector += ",[data-category~='" + element.id + "']";
              }
                        });                        
            $lis.hide(); 
                        console.log(selector);
            $('.filtersearch > div').hide().filter(selector).show();        
          } else {
            $lis.show();
          }
        });
      </script>
      <script>
           $('.eye').on('click', function() {

              var id = $(this).attr('id');
              var $this = $(this).parent().find('.counter');
              var count = Number($this.text());


              $.get('http://localhost/houzzane/index.php/home/counter/' + id + '/' + count,function() {
                ++count;
                $this.text(count);
              });

           });
      </script>
    </body>
  </html>