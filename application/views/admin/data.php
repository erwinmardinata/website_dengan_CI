<h3 style="float: left"><span class="glyphicon glyphicon-list-alt" ></span> File</h3>
<h3><a href="<?php echo site_url('admin/tfile'); ?>" style="float: right"><span class="glyphicon glyphicon-plus" ></span> Upload File</a></h3>
<div style="clear: both"></div><hr>
<p class="bg-warning" style="text-align: center"><?php echo $error; ?></p>

<table class="table table-hover display" id="table_id">
  <thead>
    <tr>
      <th>No</th>
      <th>tanggal Upload</th>
      <th>Judul</th>
      <th>Kategori</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $x=1; foreach($query as $row): ?>
    <tr>
      <td><?php echo $x; ?></td>
      <td><?php echo $row->tgl_upload; ?></td>
      <td><?php echo $row->judul; ?></td>
      <td><?php echo $row->kategori; ?></td>
      <td>
          <a href="<?php echo site_url('admin/hapus_data/'.$row->id); ?>" class="btn btn-default" onClick="return confirm('anda yakin ingin hapus ?')"><span class="glyphicon glyphicon-trash"></span></a>
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