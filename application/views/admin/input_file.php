<!--  
<script>
	$(document).ready(function(){
		$('#add_more').click(function(){
			
			$('#file_upload').prepend('<label for="exampleInputFile">File input</label>'+
				'<input class="form-control input-lg" type="text" name="judul" placeholder="Masukkan Judul File"><br>'+
				'<label for="exampleInputFile">Kategori :</label>'+
				'<select class="form-control" name="kategori">'+
				  '<?php if($kat == null){?>'+
					'<option value=""> - </option>'+
				  '<?php }else{?>'+
					'<option value=""> - </option>'+
				  '<?php foreach ($kat as $row):?>'+
					'<option value="<?php echo $row->id_kat; ?>"><?php echo $row->kategori; ?></option>'+
				  '<?php endforeach; } ?>'+
				'</select><br>'+
				'<input type="file" id="exampleInputFile" name="file_1">'+
				'<p class="help-block">* format PDF, PPT, PPTX, DOC, DOCX, RAR/ZIP</p><hr>');
		});
	});
</script>
-->
<h3>Upload File</h3><hr>
<form id="file_upload" method="post" action="<?php echo site_url('admin/input_data') ?>" enctype="multipart/form-data">
	<label for="exampleInputFile">File input</label>
    <input class="form-control input-md" type="text" name="judul" placeholder="Masukkan Judul File" required><br>
	<label for="exampleInputFile">Kategori :</label>
	<select class="form-control" name="kategori" required>
	<?php if($kat == null){?>
        <option value=""> - </option>
      <?php }else{?>
        <option value=""> - </option>
      <?php foreach ($kat as $row):?>
        <option value="<?php echo $row->id_kat; ?>"><?php echo $row->kategori; ?></option>
      <?php endforeach; } ?>
	</select><br>
    <input type="file" id="exampleInputFile" name="file" required><?php echo $error; ?>
    <p class="help-block">* format PDF, PPT, PPTX, DOC, DOCX, RAR/ZIP</p>
	<div style="text-align: center">
  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Batal</button>  
  </div>
</form>