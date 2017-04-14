<h3><span class="glyphicon glyphicon-list-alt"></span> Profil</h3><hr>
<?php if($profil == null) {?>
	<p align="center">No Data Bro</p>
<?php }else{ ?>
<?php foreach ($profil as $row): ?>
	<?php echo $row->berita; ?>
	<br><a href="<?php echo site_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
<?php endforeach; }?>