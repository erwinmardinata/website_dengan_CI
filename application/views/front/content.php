	<?php foreach ($berita as $list): ?>
	<h2><?php echo $list->judul; ?></h2>
	<small><span class="glyphicon glyphicon-user"></span> <?php echo $list->author; ?></small>&nbsp;&nbsp;
	<small><span class="glyphicon glyphicon-calendar"></span> <?php echo $list->tgl_post; ?></small><hr>
	<?php echo $list->berita; 
	endforeach;
	?>
	<br><a href="<?php echo base_url('content/berita'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>