<h3><span class="glyphicon glyphicon-user"></span> Dosen &amp; Karyawan</h3><hr>
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
            <td><a style="color: blue;" href="<?php echo site_url('content/detail_pegawai/'.$row->id_peg); ?>"><?php echo $row->nama; ?></a></td>
            <td><?php echo $row->nip; ?></td>
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
            <td><a style="color: blue;" href="<?php echo site_url('content/detail_pegawai/'.$row->id_peg); ?>"><?php echo $row->nama; ?></a></td>
            <td><?php echo $row->nip; ?></td>
          </tr>
          <?php $x++; endforeach; } ?>
        </tbody>  
      </table>
    </div>
    </div>
  </div>