<h3><span class="glyphicon glyphicon-list"></span> Kurikulum</h3><hr>
<?php for($x=1; $x<=8; $x++){ ?>
<h4>SEMESTER <?php echo $x; ?></h4>
	<table class="table">
	<thead>
		<tr>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Jumlah SKS</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = mysql_query("select * from mata_kuliah where semester = ".$x);
			if(mysql_num_rows($query)==0){?>
		<tr>
			<td colspan="3" align="center">Data Kosong</td>
		</tr>
		<?php }else{ 
			$y=0; while ($row = mysql_fetch_array($query)){
			$y = $y + $row['jml_sks'];
		?>
		<tr>
			<td><?php echo $row['kode_mk']; ?></td>
			<td><?php echo $row['nama_mk']; ?></td>
			<td><?php echo $row['jml_sks']; ?></td>
		</tr>
			<?php } ?>
		<tr>
			<td colspan="2" align="center">Total Jumlah SKS</td>
			<td><?php echo $y; } ?></td>
		</tr>
	</tbody>
</table>
<?php } ?>
