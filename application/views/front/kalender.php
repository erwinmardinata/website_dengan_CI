<h3><span class="glyphicon glyphicon-list-alt"></span> Kalender Akademik</h3><hr>
<?php if($kalender == null){ ?>
  <br><p align="center">Data Blum Ada</p> 
<?php }else{?>
<h4><?php echo $kalender->judul; ?></h4>
<a href="<?php echo base_url('assets/images/'.$kalender->images); ?>">
	<p align="center"><img src="<?php echo base_url('assets/images/'.$kalender->images); ?>" width="500px"/></p><br><br>
</a>
<br><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
<?php } ?>