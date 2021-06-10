<!-- Main content -->
<form action="<?php echo site_url('Warga/UpdateDataWarga'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Data Warga</h3>
              
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <input type="hidden" name="id_warga" value="<?php echo $detail['id_warga']; ?>">
                  <input type="hidden" name="id_ronda" value="<?php echo $detail['id_ronda']; ?>">
                  <input type="hidden" name="id_kk" value="<?php echo $detail['id_kk']; ?>">
                  <input type="hidden" name="id_rt" value="<?php echo $detail['id_rt']; ?>">
                  <div>
                    <br>
                    <label>NIK</label>
                    <br>
                    <input type="text" name="nik" class="form-control" value="<?php echo $detail['nik']; ?>">
                  </div>

                  <div>
                    <br>
                    <label>Nama Lengkap</label>
                    <br>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $detail['nama_lengkap']; ?>">
                  </div>

                  <div>
                    <br>
                    <label>No Telepon</label>
                    <br>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $detail['no_telp']; ?>">
                  </div>
                
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->