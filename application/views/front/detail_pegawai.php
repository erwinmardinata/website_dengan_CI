<h3><span class="glyphicon glyphicon-user"></span> Detail Pegawai</h3><hr>

<div class="row">
	<div class="col-md-3 col-lg-3 " align="center"> 
	<?php 
	if($cek->photo == null){?>
		<img src="<?php echo base_url('assets/images/user.png'); ?>" class="avatar img-thumbnail" alt="avatar">
	<?php }else{?>
		<img src="<?php echo base_url('assets/images/photo/'.$cek->photo); ?>" class="avatar img-thumbnail" alt="avatar">
	<?php } ?>
	</div>
	
	<div class=" col-md-9 col-lg-9 "> 
	  <table class="table table-user-information">
		<tbody>
		  <tr>
			<td>Nama</td>
			<td><?php echo $cek->nama; ?></td>
		  </tr>
		  <tr>
			<td>NIP</td>
			<td><?php echo $cek->nip; ?></td>
		  </tr>
		  <tr>
			<td>TTL</td>
			<td><?php echo $cek->tempat_lahir.", ".$cek->tgl_lahir; ?></td>
		  </tr>
		  <tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $cek->jenis_kelamin; ?></td>
		  </tr>
		  <tr>
			<td>Alamat</td>
			<td><?php echo $cek->alamat; ?></td>
		  </tr>
		  <tr>
			<td>Status</td>
			<td><?php echo $cek->jenis_pegawai; ?></td>
		  </tr>
		   <tr>
			<td>Mata Kuliah</td>
			<td>
			<?php 
				if(empty($mk)){
					echo "-";
				}else{
					foreach($mk as $row){
						echo "- ".$row->nama_mk."<br>"; 
					}
				}
			?>
			</td>
		  </tr>
		</tbody>
	  </table> 
	</div>
  </div>