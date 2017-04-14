<link href="<?php echo base_url('assets/ckeditor/contents.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('assets/ckfinder/ckfinder.js'); ?>"></script>

<h3><?php echo $title; ?></h3><hr>
<?php echo form_open_multipart('admin/proses_input_berita'); ?>
<input class="form-control input-md" type="text" name="judul" value="<?php echo $judul; ?>" placeholder="Masukkan Judul" required><br>
<input type="file" id="exampleInputFile" name="images" ><?php echo $error; ?><br>
<input class="form-control input-md" type="text" name="deskripsi" value="<?php echo $deskripsi; ?>" placeholder="Tambahkan deskripsi berita"><br>
<div id="txtEditor">
	<textarea rows='15' name='berita' id='content' <?php echo $disable; ?> ><?php echo $berita; ?></textarea>
	<script type='text/javascript'>
	var editor = CKEDITOR.replace('content');
	CKFinder.setupCKEditor(editor, 'ckfinder/');
	</script>
</div><br>

<button type="submit" name="simpan" class="btn btn-default"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
<input type="hidden" name="aksi" value="<?php echo $aksi; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="status" value="<?php echo $status; ?>">
<input type="hidden" name="disable" value="<?php echo $disable; ?>">
<?php echo form_close(); ?>