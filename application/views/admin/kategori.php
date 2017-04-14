<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      </div>
	  <div style="clear: both"></div>
    </div>
  </div>
</div>
<!-- end Modal -->

<h3 style="float: left"><span class="glyphicon glyphicon-th-list"></span> Kategori file</h3>
<h3><a href="#" id="tambah_data" data-id="tambah"  style="float: right"><span class="glyphicon glyphicon-plus"></span> Kategori</a></h3>
<div style="clear: both"></div><hr><br>
 <?php echo $sukses; ?>
 <div class="col-md-2"></div>
 <div class="col-md-8">
	 <table class="table" align="center">
		<thead>
			<tr>
				<th>No</th>
				<th>Kategori</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
		<?php $x=1; foreach ($query as $row): ?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $row->kategori; ?></td>
				<td>
					<a href="#" id="edit_data" data-id="<?php echo $row->id_kat; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;
					<a href="<?php echo site_url('admin/hkategori/'.$row->id_kat); ?>" class="btn btn-primary" onClick="return confirm('Anda yakin...??')"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
		<?php $x++; endforeach; ?>
		</tbody>
	</table>
 </div>
 <script>
	$(function(){
		$(document).on('click','#edit_data',function(e){
			e.preventDefault();
			$("#myModal").modal('show');
			$.post('<?php echo site_url('admin/ekategori'); ?>',
				{id:$(this).attr('data-id')},
				function(html){
					$(".modal-body").html(html);
				}   
			);
		});
		$(document).on('click','#tambah_data',function(e){
			e.preventDefault();
			$("#myModal").modal('show');
			$.post('<?php echo site_url('admin/tkategori'); ?>',
				{id:$(this).attr('')},
				function(html){
					$(".modal-body").html(html);
				}   
			);
		});
	});
</script>