<div class="content-wrapper">
<section class="content">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
        <?php $attributes = array("name" => "library");
      echo form_open_multipart("admin/library", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Title</label>
                <input type="text" class="form-control"  name="title" required>
              </div>
              <div class="form-group">
              <label for="">Rate</label>
                <input type="number" class="form-control"  name="rate">
              </div>
              <div class="form-group">
              <label for="">Map</label>
                <input type="text" class="form-control"  name="map">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <input type="text" class="form-control"  name="descr">
              </div>
              <div class="form-group">
                <label>Architect</label>
                <select class="form-control select2" style="width: 100%;" name="architect">
                <?php
              foreach( $query1 as $row)
                {?>
                  <option ><?php echo $row->name; ?></option>
                   <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;" name="category">
                <?php
              foreach( $query as $row)
                {?>
                  <option ><?php echo $row->category; ?></option>
                   <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label>Space</label>
                <select class="form-control select2" style="width: 100%;" name="space">
                <?php
              foreach( $query3 as $row)
                {?>
                  <option ><?php echo $row->space; ?></option>
                   <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label>Type</label>
                <select class="form-control select2" style="width: 100%;" name="type">
                <?php
              foreach( $query4 as $row)
                {?>
                  <option ><?php echo $row->type; ?></option>
                   <?php }?>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="picture">
                </div>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
          </div>
          </div>

         <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>url</th>
                  <th>Map</th>
                </tr>
                </thead>
                <tbody>
                <?php
        foreach( $query2 as $row)
          {?>
                <tr>
                  <td><?php echo $row->title; ?> </td>
                  <td><?php echo base_url()?>uploads/<?php echo $row->picture; ?> </td>
                  <td><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/libraryedit/'.$row->id; ?>" >Maping</a></td>
                  <td><a  class="btn btn-primary" href="<?php echo base_url().'index.php/admin/Deletelibrary/'.$row->id; ?>">delet</a></td>
                </tr>
                 <?php }?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

