<!-- Main content -->
<form action="<?php echo site_url('Kartu/UpdateDataKartu'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update No. Kartu Keluarga</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_kk" value="<?php echo $detail['id_kk']; ?>">
                  <div>
                    <br>
                    <label>Nomor Kartu Keluarga</label>
                    <br>
                    <input type="text" name="no_kk" class="form-control" value="<?php echo $detail['no_kk']; ?>">
                  </div>

                  <div>
                    <br>
                    <label>Nama Kepala Keluarga</label>
                    <br>
                    <input type="text" name="kepala_keluarga" class="form-control" value="<?php echo $detail['kepala_keluarga']; ?>">
                  </div>
                
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->