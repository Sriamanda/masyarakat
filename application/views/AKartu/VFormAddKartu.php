<form action="<?php echo site_url('Kartu/AddDataKartu'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data Kartu Keluarga</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>No Kartu Keluarga</label>
                    <input type="text" class="form-control" name="no_kk">
                  </div>
                  
                  <div>
                    <label>Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" name="kepala_keluarga">
                  </div>
 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->