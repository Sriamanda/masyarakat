<!-- Main content -->
<form action="<?php echo site_url('Ronda/UpdateDataRonda'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Ronda</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_ronda" value="<?php echo $detail['id_ronda']; ?>">
                  <div>
                    <br>
                    <label>Hari</label>
                    <br>
                    <input type="text" name="hari" class="form-control" value="<?php echo $detail['hari']; ?>">
                  </div>
                


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->