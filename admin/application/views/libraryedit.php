<div class="content-wrapper">
<section class="content">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <?php $attributes = array("name" => "libraryedit");
      echo form_open_multipart("admin/libraryedit", $attributes);?>
      <?php
if (isset($data))
{
  
}
else {
  $data=0;
}?>
          <div class="box-body">
            <input   value="<?php echo $id; ?>" id="first_name" type="hidden" class="validate" name="id">
            <div class="form-group">
              <label for="">Title</label>
                <input type="text" class="form-control"  name="title" value="<?php echo $title; ?>" required>
              </div>
              <div class="form-group">
              <label for="">Rate</label>
                <input type="number" class="form-control"  name="rate" value="<?php echo $rate; ?>">
              </div>
              <div class="form-group">
              <label for="">Map</label>
                <input type="text" class="form-control"  name="map" value="<?php echo $map; ?>">
              </div>
              <div class="form-group">
                <label>Architect</label>
                <select class="form-control select2" style="width: 100%;" name="architect" >
                <option selected="selected"><?php echo $architect; ?></option>
                <?php
              foreach( $query1 as $row)
                {?>
                  <option ><?php echo $row->name; ?></option>
                   <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;" name="category" >
                <option selected="selected"><?php echo $category; ?></option>
                <?php
              foreach( $query as $row)
                {?>
                  <option ><?php echo $row->category; ?></option>
                   <?php }?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
          </div>
          </div>

         
          </section>


          <script src="<?php echo base_url('media/plugins/select2/select2.full.min.js'); ?>"></script>
          
          <!-- InputMask -->
<script src="<?php echo base_url('media/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('media/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('media/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<!-- date-range-picker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

