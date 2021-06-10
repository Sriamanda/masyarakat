<form action="<?php echo site_url('Warga/AddDataWarga'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data Warga</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div>
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik">
                  </div>

                  <div>
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                  </div>
                  
                  <div>
                    <label>No Telepon</label>
                    <input type="text" class="form-control" name="no_telp">
                  </div>

                  <div>
                    <label>No Kartu Keluaga</label>
                    <select name="id_kk" class="form-control select2" style="width: 100%;" required="required">
                      <?php
                        foreach($list_kk as $lk){
                          echo '<option value="'.$lk->id_kk.'">'.$lk->kepala_keluarga.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                 <div>
                    <label>Nama RT</label>
                    <select name="id_rt" class="form-control select2" style="width: 100%;" required="required">
                      <?php
                        foreach($list_rt as $lr){
                          echo '<option value="'.$lr->id_rt.'">'.$lr->no_rt.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                 <div>
                    <label>Jadwal Ronda</label>
                    <select name="id_ronda" class="form-control select2" style="width: 100%;" required="required">
                      <?php
                        foreach($list_ronda as $lo){
                          echo '<option value="'.$lo->id_ronda.'">'.$lo->hari.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <div>
                    <label>Photo</label>
                    <input type="file"  name="image" required="required">
                  </div>
                 
                </div>
                 <!-- /.box-body -->
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->