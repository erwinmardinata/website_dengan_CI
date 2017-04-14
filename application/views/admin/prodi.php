<h3 style="float: left"><span class="glyphicon glyphicon-user"></span> Infor Program Studi</h3>
<div style="clear: both"></div><hr>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#profil" aria-controls="profil" role="tab" data-toggle="tab">Profil</a></li>
    <li role="presentation"><a href="#kalender" aria-controls="kalender" role="tab" data-toggle="tab">Kalender</a></li>
    <li role="presentation"><a href="#kurikulum" aria-controls="kurikulum" role="tab" data-toggle="tab">Kurikulum</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="profil">
      <?php if(mysql_num_rows($profil)==0){ ?>
      <br><p align="center">Data Blum Ada</p> 
      <?php }else{ $row = mysql_fetch_array($profil) ?>
        <br><p align="center"><?php echo $row['judul']; } ?></p> 
    <h5><a href="<?php echo base_url('admin/tprofil/profil'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" ></span> Edit</a></h5>
    </div>

    <div role="tabpanel" class="tab-pane" id="kalender">
      <?php if(mysql_num_rows($kalender)==0){ ?>
      <br><p align="center">Data Blum Ada</p> 
      <?php }else{ ?>
      <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>#</th>
        </tr>
      </thead>
      <?php $x=1; while($row = mysql_fetch_array($kalender)){?>
        <tbody>
        <tr>
          <td><?php echo $x; ?></td>
          <td><?php echo $row['judul']; ?></td>
          <td>
            <a href="<?php echo base_url('admin/hapus_berita/'.$row['id']); ?>" class="btn btn-primary" onClick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
          </td>
        </tr>
        </tbody>
        <?php $x++; } ?>
        </table> 
        <?php } ?>
    <h5><a href="<?php echo base_url('admin/tkalender_akademik'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" ></span> Kalender</a></h5>
    </div>

    <div role="tabpanel" class="tab-pane" id="kurikulum">
      
      <h3><span class="glyphicon glyphicon-list-alt" ></span> Daftar Mata Kuliah</h3>
      <div style="clear: both"></div><hr><br>
      <table class="table table-hover display" id="table_id">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah SKS</th>
            <th>Semester</th>
            <th>Prasyarat</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php $x=1; foreach($mk as $row): ?>
          <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo $row->kode_mk; ?></td>
            <td><?php echo $row->nama_mk; ?></td>
            <td><?php echo $row->jml_sks; ?></td>
            <td><?php echo $row->semester; ?></td>
            <td><?php echo $row->prasyarat; ?></td>
            <td>
              <a href="<?php echo site_url('admin/edit_matakuliah/'.$row->id_mk); ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
                
                <a href="<?php echo site_url('admin/hapus_matakuliah/'.$row->id_mk); ?>" class="btn btn-default" onclick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span>
                </button>
            </td>
          </tr>
          <?php $x++; endforeach;?>
        </tbody>  
      </table>
      <br>
      <h5><a href="<?php echo site_url('admin/input_matakuliah'); ?>" style="text-align: center" ><span class="glyphicon glyphicon-plus" ></span> Mata Kuliah</a></h5>

    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
</script>