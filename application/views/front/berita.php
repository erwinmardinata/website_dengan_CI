<h3><span class="glyphicon glyphicon-list-alt"></span> Berita</h3><hr>
	<?php 
      if ($query == null){ ?>
     <h3 style="text-align: center">Data masih kosong bro...</h3>
    <?php
      }else{ $x=1; foreach($query as $row):?>
      <h4><?php echo $row->judul; ?></h4>
      <small><span class="glyphicon glyphicon-user"></span> <?php echo $row->author; ?></small>&nbsp;&nbsp;
	  <small><span class="glyphicon glyphicon-calendar"></span> <?php echo $row->tgl_post; ?></small>
	  <div style="clear: both"></div>
	  <?php if($row->images == null){ ?>
		<img src="<?php echo base_url('assets/images/no-image.png'); ?>" width="150" height="150" style="float:left; margin-right:10px; margin-bottom: 5px;" />
	  <?php }else{ ?>
		<img src="<?php echo base_url('assets/images/'.$row->images); ?>" width="150" height="150" style="float:left; margin-right:10px; margin-bottom: 5px;" />
	  <?php } echo $row->deskripsi; ?>
	  <br>
	  <a href="<?php echo site_url('content/read/'.$row->judul_seo); ?>" class="btn btn-primary">Selengkapanya <span class="glyphicon glyphicon-chevron-right"></span></a>
      <div style="clear: both"></div><hr>
    <?php endforeach; } ?>
<div style="text-align: center">
  <?php echo $halaman; ?>
</div>