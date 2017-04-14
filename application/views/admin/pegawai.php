<h3 style="float: left"><span class="glyphicon glyphicon-user"></span> Dosen &amp; Karyawan</h3>
<h3><a href="<?php echo site_url('admin/tpegawai'); ?>" style="float: right"><span class="glyphicon glyphicon-plus" ></span> Dosen &amp; Karyawan</a></h3>
<div style="clear: both"></div><hr>
<div style="float: left;"><blockquote> Dosen &amp; Karyawan &rarr; List</blockquote></div>
  <div style="float: right;">
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
  </div>
<div style="clear: both"></div><hr>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#dosen" aria-controls="dosen" role="tab" data-toggle="tab">Dosen</a></li>
    <li role="presentation"><a href="#karyawan" aria-controls="karyawan" role="tab" data-toggle="tab">Karyawan</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="dosen">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP/NIDN</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php
			if($dosen == null){
				echo "<tr><td align='center' colspan='4'>Data Kosong</td></tr>";
			}else{
				$x=1;	foreach($dosen as $row):
		  ?>
          <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->nip; ?></td>
			<td>
				<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></a>&nbsp;
				<a href="<?php echo site_url('admin/epegawai/'.$row->id_peg); ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
				<a href="<?php echo site_url('admin/hpegawai/'.$row->id_peg); ?>" class="btn btn-default" onClick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
          </tr>
          <?php $x++; endforeach; } ?>
        </tbody>  
      </table>
    </div>

    <div role="tabpanel" class="tab-pane" id="karyawan">
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
         <?php
			if($karyawan == null){
				echo "<tr><td align='center' colspan='4'>Data Kosong</td></tr>";
			}else{
				$x=1;	foreach($karyawan as $row):
		  ?>
          <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->nip; ?></td>
			<td>
				<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></a>&nbsp;
				<a href="<?php echo site_url('admin/epegawai/'.$row->id_peg); ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
				<a href="<?php echo site_url('admin/hpegawai/'.$row->id_peg); ?>" class="btn btn-default" onClick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
          </tr>
          <?php $x++; endforeach; } ?>
        </tbody>  
      </table>
    </div>
    </div>
  </div>

</div>