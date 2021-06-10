<section class="content-header">
         <!--  <h1>
            Infomasi SPP     <small>Data Ronda</small>
          </h1> -->
</section>

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informasi     <small>Data Ronda</small></h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
		
		
      <a href="<?php echo site_url('Ronda/VFormAddRonda'); ?>" class="btn btn-primary btn-sm fa fa-plus"> Tambah Data</a><br><br>
		
	
              <table class="table table-striped" id="data_grid">
                <thead>
                <tr>
                  <th>Hari</th>
                  <th>Aksi</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
	if(!empty($DataRonda))
	{
		foreach($DataRonda as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->hari; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Ronda/DataRonda/'.$ReadDS->id_ronda.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Ronda/DeleteDataRonda/'.$ReadDS->id_ronda) ?>">Delete</a>
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



