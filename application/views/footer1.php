  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('media/js/materialize.min.js')?>"></script>
      
      <script src="<?php echo base_url('media/js/image-map-pro.js'); ?>"></script>
      
       <script type="text/javascript">
        ;(function ($, window, document, undefined) {
        
            $(document).ready(function() {
           <?php
              foreach( $query2 as $row)
        {?>
            $('#image-map-pro-container-<?php echo $row->id; ?>').imageMapPro(<?php echo $row->map;?>);
          <?php }?>  
             });
        })(jQuery, window, document);
    </script>
 
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


              $.get('http://innolyf.com/index.php/home/counter/' + id ,function() {
                ++count;
                $this.text(count);
              });

           });
      </script>
      <script>
           $('.short').on('click', function() {

              var id = $(this).attr('id');


              $.get('http://innolyf.com/index.php/home/shortlist/' + id+  ,function() {
                ++count;
                $this.text(count);
              });

           });
      </script>
      
    </body>
  </html>