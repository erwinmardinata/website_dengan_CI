<style type="text/css">
	.thumbnail img{
		height: 250px;
	}
</style>
<aside>
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#FF9900; color: #fff;">
  <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ketua Program Studi</h3>
</div>
    <img src="<?php echo base_url('assets/images/user.png'); ?>" alt="" style="width: 150px; height: auto; float: left; margin: 5px;"> 
      <p style="padding:7px;">
      Nama : <a href="#">Iqromul Hidayat</a><br>
      TTL &nbsp;&nbsp;&nbsp;: Kukin, 26 Desember 1996 
      </p>
	  <div style="clear: both"></div>
</div>
<div class="panel panel-default">
<div class="panel-heading" style="background-color:#FF9900; color: #fff;">
  <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> Berita Terbaru</h3>
</div>
  <div class="list-group">
    <?php 
      if ($s_berita == null){ ?>
    <a href="#" class="list-group-item">Data masih blum ada Bro</a>
    <?php
      }else{ $x=1; foreach($s_berita as $row): if($row->status != "berita") continue; ?>
    <a href="<?php echo site_url('content/read/'.$row->judul_seo); ?>" class="list-group-item"><?php echo $row->judul; ?></a>
      <?php $x++; endforeach; } ?>
  </div>
</div>

<div class="panel panel-default">
<div class="panel-heading" style="background-color:#FF9900; color: #fff;">
  <h3 class="panel-title"><span class="glyphicon glyphicon-download-alt"></span> Download</h3>
</div>
  <div class="list-group">
    <?php 
      if ($s_data == null){ ?>
    <a href="#" class="list-group-item">Data masih blum ada Bro</a>
    <?php
      }else{ $x=1; foreach($s_data as $rows): ?>
    <a href="<?php echo base_url().'assets/file/'.$rows->title_file; ?>" class="list-group-item"><?php echo $rows->judul; ?></a>
      <?php $x++; endforeach; } ?>
  </div>
</div>
</aside>  