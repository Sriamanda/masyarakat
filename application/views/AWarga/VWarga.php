<section class="content-header">
          <h1>
            
          </h1>
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi   <small>Data Warga</small></h3>

             
            </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
			
      <a href="<?php echo site_url('AWarga/VFormAddWarga'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		  
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Nomor RT</th>
                  <th>No Telepon</th>
                  <th>Jadwal Ronda</th>
                  <th>Photo</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataWarga))
	{
		foreach($DataWarga as $ReadDS)
		{
	?>

	<tr>
		
    <td><?php echo $ReadDS->nik; ?></td>
    <td><?php echo $ReadDS->nama_lengkap; ?></td>
    <td><?php echo $ReadDS->no_rt; ?></td>
    <td><?php echo $ReadDS->no_telp; ?></td>
    <td><?php echo $ReadDS->hari; ?></td>
    <td><img src="<?php echo base_url('images/').$ReadDS->image; ?>" width="60"></td>
   
		<td width="5%">
			
		</td>
	</tr>
            
         <?php
     }
 }
 ?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>