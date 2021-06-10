<!-- Main content -->
<form action="<?php echo site_url('RT/UpdateDataRT'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Data RT</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_rt" value="<?php echo $detail['id_rt']; ?>">
                  <div>
                    <br>
                    <label>Wilayah RT</label>
                    <br>
                    <input type="text" name="no_rt" class="form-control" value="<?php echo $detail['no_rt']; ?>">
                  </div>

                  <div>
                    <br>
                    <label>Nama RT</label>
                    <br>
                    <input type="text" name="nama_rt" class="form-control" value="<?php echo $detail['nama_rt']; ?>">
                  </div>
                


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->