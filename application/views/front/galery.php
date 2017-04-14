<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/fancybox/jquery.fancybox.css'); ?>">
<style type="text/css">
	.thumbnail img{
		height: 200px;
	}
</style>
<h3><span class="glyphicon glyphicon-film"></span> Galery</h3><hr>

<div class="row">
<?php if($query == null){?>
  <h3 style="text-align: center">Data masih kosong bro...</h3>
<?php }else{ foreach ($query as $row):?>
  <div class="col-xs-6 col-md-6">
	<a class="fancybox thumbnail" rel="galery" href="<?php echo base_url().'assets/galery/'.$row->photo; ?>" title="<?php echo $row->deskripsi; ?>">
		<img src="<?php echo base_url().'assets/galery/'.$row->photo; ?>">
	</a>
  </div>
<?php endforeach; } ?>
</div>
<br>
<div style="text-align: center">
  <?php echo $halaman; ?>
</div>
<script src="<?php echo base_url('assets/bootstrap/fancybox/jquery.fancybox.pack.js'); ?>"></script>
<script>
$(".fancybox").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
</script>