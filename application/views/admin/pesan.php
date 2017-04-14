<h3><span class="glyphicon glyphicon-envelope"></span> Messages</h3><hr>
<table class="table" id="table_id">
	<thead>
		<tr>
			<th></th>
			<th>Nama</th>
			<th>Email</th>
			<th>Pesan</th>
			<th>Waktu</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($kontak as $row):
		if($row->status == 1)
			$sts = "class='info'";
		else
			$sts = "";
	?>
		<tr <?php echo $sts; ?>>
			<td><input type="checkbox" name="pilih" value="<?php echo $row->id; ?>" ></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo substr($row->pesan, 0, 20)."..."; ?></td>
			<td><?php echo $row->tanggal." ".$row->jam; ?></td>
			<td>
				<a href="<?php echo base_url('admin/read_messages/'.$row->id); ?>" class="btn btn-default" title="Baca"><span class="glyphicon glyphicon-book"></span></a>
				<a href="<?php echo base_url('admin/delete_messages/'.$row->id); ?>" class="btn btn-default" title="hapus" onclick="confirm('anda yakin ?')"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
</script>