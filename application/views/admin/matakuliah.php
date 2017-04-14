<h3><span class="glyphicon glyphicon-user"></span> <?php echo $title; ?></h3><hr>
<form class="form-horizontal" action="<?php echo site_url('admin/matakuliah'); ?>" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Kode MK</label>
    <div class="col-sm-9">
	    <input type="text" name="kdmk" value="<?php echo $kdmk; ?>" class="form-control" placeholder="Kode Mata Kuliah" size="100%" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama MK</label>
    <div class="col-sm-9">
		<input type="text" name="nmmk" value="<?php echo $nmmk; ?>" class="form-control" placeholder="Nama Mata Kuliah" size="100%" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Jumlah SKS</label>
    <div class="col-sm-9">
	    <input type="text" name="sks" value="<?php echo $sks; ?>" class="form-control" placeholder="Jumlah SKS" size="100%" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Semester</label>
    <div class="col-sm-9">
	    <input type="text" name="semester" value="<?php echo $semester; ?>" class="form-control" placeholder="Semester" size="100%" required>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Prasyarat</label>
    <div class="col-sm-9">
		<input type="text" name="prasyarat" value="<?php echo $prasyarat; ?>" class="form-control" placeholder="Prasyarat" size="100%">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Dosen</label>
    <div class="col-sm-9">
		<select class="form-control" name="dosen">
		<?php
			if($dosen == null){
				echo "<option value=''> - </option>";
			}else{
				echo "<option value=''> - </option>";
				foreach($dosen as $row){
					echo "<option value=".$row->id_peg.">".$row->nama."</option>";
				}
			}
		?>
		</select>
    </div>
  </div>
  <div class="form-group">
	  <label class="col-md-2 control-label"></label>
	  <div class="col-md-9">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="aksi" value="<?php echo $aksi; ?>">
		<input class="btn btn-primary" value="Save Changes" type="submit">
		<span></span>
		<input class="btn btn-default" value="Cancel" type="reset">
	  </div>
	</div>
</form>