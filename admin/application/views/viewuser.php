<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
        <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>username</th>
                  <th>contact</th>
                  <th>email</th>
                </tr>
                </thead>
                <tbody>
                <?php
        foreach( $query as $row)
          {?>
                <tr>
                  <td><?php echo $row->fname; ?> <?php echo $row->lname; ?></td>
                  <td><?php echo $row->contact; ?></td>
                  <td><?php echo $row->email; ?></td>
                </tr>
                 <?php }?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     
    </section>

    
  </div>