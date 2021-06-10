<form action="<?php echo site_url('ART/AddDataRT'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data RT</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>Wilayah RT</label>
                    <input type="text" class="form-control"  name="no_rt">
                  </div>
                  <div>
                    <label>Nama RT</label>
                    <input type="text" class="form-control"  name="nama_rt">
                  </div>
                  
                 
                    
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->