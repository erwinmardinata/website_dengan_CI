<h3 style="float: left"><span class="glyphicon glyphicon-film" ></span> Galery</h3>
<h3><a href="<?php echo site_url('admin/input_galery'); ?>" style="float: right"><span class="glyphicon glyphicon-plus" ></span> Photo</a></h3>
<div style="clear: both"></div><hr><br>
<p class="bg-info" style="text-align: center"><?php echo $sukses; ?></p>
<table class="table table-hover display" id="table_id">
  <thead>
    <tr>
      <th>No</th>
      <th>Photo</th>
      <th>Deskripsi</th>
      <th>Date</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $x=1; foreach($query as $row): ?>
    <tr>
      <td><?php echo $x; ?></td>
      <td>
      	<a href="<?php echo base_url('assets/galery/'.$row->photo); ?>"><?php echo $row->photo; ?></a>
      </td>
      <td><?php echo $row->deskripsi; ?></td>
      <td><?php echo $row->tgl; ?></td>
      <td>
        <a href="<?php echo site_url('admin/hapus_galery/'.$row->id); ?>" onClick="return confirm('Anda yakin...??')" class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span> hapus</a>
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
