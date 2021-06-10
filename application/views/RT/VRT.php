<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data RT</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi     <small>Data RT</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('RT/VFormAddRT'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Wilayah RT</th>
                  <th>Nama RT</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataRT))
	{
		foreach($DataRT as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->no_rt; ?></td>
    <td><?php echo $ReadDS->nama_rt; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('RT/DataRT/'.$ReadDS->id_rt.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('RT/DeleteDataRT/'.$ReadDS->id_rt) ?>">Delete</a>
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
      <script type="text/javascript">$('#data_grid').DataTable()</script>



