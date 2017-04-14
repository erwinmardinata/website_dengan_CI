<h4><span class="glyphicon glyphicon-th-list"></span> <?php echo $title; ?></h4>
<hr>
<form class="form-horizontal" action="<?php echo site_url('admin/proses_input_kat'); ?>" method="post">
  <div class="form-group-lg">
    <label class="col-sm-3 control-label">Kategori :</label>
    <div class="col-sm-9">
      <input type="text" name="kategori" class="form-control"  value="<?php echo $kategori; ?>" placeholder="Kategori" required><br>
    </div>
  </div>
  
  <div style="text-align: center">
      <input type="hidden" name="id" value="<?php echo $id; ?>" >
      <input type="hidden" name="aksi" value="<?php echo $aksi; ?>" >
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-default"  data-dismiss="modal">Cencel</button>
  </div>
</form>
