<h3><span class="glyphicon glyphicon-user"></span> <?php echo $title; ?></h3><hr>
<!-- left column -->
<form class="form-horizontal" role="form" action="<?php echo site_url('admin/input_pegawai'); ?>" enctype="multipart/form-data" method="post">
<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="text-center">
	<?php 
	$cek = $this->db->get_where('pegawai',array('id_peg'=> $id))->row(); 
	if(empty($cek->photo)){?>
		<img src="<?php echo base_url('assets/images/user.png'); ?>" class="avatar img-thumbnail" alt="avatar">
	<?php }else{?>
		<img src="<?php echo base_url('assets/images/photo/'.$cek->photo); ?>" class="avatar img-thumbnail" alt="avatar">
	<?php } ?>
	<h6>Upload Photo Pegawai</h6>
	<input type="file" name="photo" class="text-center center-block well well-sm"><?php echo $error; ?>
  </div>
</div>
<!-- edit form column -->
<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
<?php echo validation_errors(); ?>
	<div class="form-group">
	  <label class="col-lg-3 control-label">Nama</label>
	  <div class="col-lg-8">
		<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama Pegawai" required>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-lg-3 control-label">NIP/NIDN</label>
	  <div class="col-lg-8">
		<input type="text" class="form-control" name="nip" value="<?php echo $nip; ?>" placeholder="NIP/NIDN" required>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-3 control-label">Tempat Lahir</label>
	  <div class="col-md-8">
		<input type="text" class="form-control" name="tmp_lahir" value="<?php echo $tmp_lahir; ?>" placeholder="Tempat Lahir" required>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-md-3 control-label">Tanggal Lahir</label>
	  <div class="col-md-8">
		<input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" placeholder="Tanggal Lahir" required>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-lg-3 control-label">Jenis Kelamin</label>
	  <div class="col-lg-8">
		<select name = "jk" class="form-control" required>
			<option value=""></option>
			<option value="Laki-laki">laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-lg-3 control-label">Alamat</label>
	  <div class="col-lg-8">
		<textarea class="form-control" rows="3" name="alamat" required><?php echo $alamat; ?></textarea>
	  </div>
	</div>
	<div class="form-group">
	  <label class="col-lg-3 control-label">Jenis Pegawai</label>
	  <div class="col-lg-8">
		<select class="form-control" name="jenis_peg" required>
			<option value=""></option>
			<option value="Dosen">Dosen</option>
			<option value="Karyawan">Karyawan</option>
		</select>
	  </div>
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>" >
	<input type="hidden" name="aksi" value="<?php echo $aksi; ?>" >
	<div class="form-group">
	  <label class="col-md-3 control-label"></label>
	  <div class="col-md-8">
		<input class="btn btn-primary" value="Save Changes" type="submit">
		<span></span>
		<input class="btn btn-default" value="Cancel" type="reset">
	  </div>
	</div>
  </form>
</div>