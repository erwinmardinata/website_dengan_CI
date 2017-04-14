<h3 style="float: left"><span class="glyphicon glyphicon-list-alt" ></span> Berita</h3>
<h3><a href="<?php echo site_url('admin/tberita'); ?>" style="float: right"><span class="glyphicon glyphicon-plus" ></span> Berita</a></h3>
<div style="clear: both"></div><hr><br>
<!-- list berita -->
<p class="bg-info" style="text-align: center"><?php echo $sukses; ?></p>
<table class="table table-hover display" id="table_id">
  <thead>
    <tr>
      <th>No</th>
      <th>tanggal Publikasi</th>
      <th>Judul Berita</th>
      <th>Author</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $x=1; foreach($query as $row): ?>
    <tr>
      <td><?php echo $x; ?></td>
      <td><?php echo $row->tgl_post; ?></td>
      <td><?php echo $row->judul; ?></td>
      <td><?php echo $row->author; ?></td>
      <td>
        <a href="<?php echo site_url('admin/eberita/'.$row->id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
        <a href="<?php echo site_url('admin/hapus_berita/'.$row->id); ?>" class="btn btn-default" onClick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span></a>
      </td>
    </tr>
    <?php $x++; endforeach; ?>
  </tbody>  
</table>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
</script>