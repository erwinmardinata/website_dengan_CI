<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="<?php echo site_url('admin/index'); ?>">
        <h4 class="panel-title"><span class="glyphicon glyphicon-th-large"></span> Dashboard</h4>
      </a>    
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="<?php echo site_url('admin/messages'); ?>">
        <h4 class="panel-title">
			<span class="glyphicon glyphicon-envelope"></span> Messages
			<?php 
				$query = mysql_query("select count(status) as jum from kontak where status=1");
				$row = mysql_fetch_array($query);				
				if($row['jum'] == 0){
					echo "";
				}else{
					echo $row['jum'];
				}
			?>
		</h4>
      </a>    
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="<?php echo site_url('admin/berita'); ?>">
        <h4 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Berita</h4>
      </a>    
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#file" aria-expanded="false" aria-controls="collapseThree">
        <h4 class="panel-title"><span class="glyphicon glyphicon-upload"></span> File <span class="caret"></span></h4>
      </a>
    </div>
    <div id="file" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-group">
        <a href="<?php echo site_url('admin/data_file'); ?>" class="list-group-item">Upload file</a>
        <a href="<?php echo site_url('admin/kategori'); ?>" class="list-group-item">Kategori</a>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="<?php echo site_url('admin/pegawai'); ?>">
        <h4 class="panel-title"><span class="glyphicon glyphicon-user"></span> Dosen &amp; Karyawan</h4>
      </a>    
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#other" aria-expanded="false" aria-controls="collapseThree">
        <h4 class="panel-title"><span class="glyphicon glyphicon-new-window"></span> Other <span class="caret"></span></h4>
      </a>
    </div>
    <div id="other" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-group">
        <a href="<?php echo site_url('admin/prodi'); ?>" class="list-group-item">Program studi</a>
        <a href="<?php echo site_url('admin/galery'); ?>" class="list-group-item">Galery</a>
      </div>
    </div>
  </div>
</div>  