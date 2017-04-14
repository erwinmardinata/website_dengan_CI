<h3><span class="glyphicon glyphicon-envelope"></span> Read Messages</h3><hr>
<div class="col-md-7">
	<div style="float: left"><span class="glyphicon glyphicon-user"></span> <b><?php echo $messages->nama."</b> / ".$messages->email; ?></div>
	<div style="float: right"><span class="glyphicon glyphicon-time"></span> <?php echo $messages->tanggal.", <b>".$messages->jam."</b>"; ?></div>
	<hr>
	<p style="font-size: 17px; text-align: justify;"><?php echo $messages->pesan; ?></p>
</div>
<div class="col-md-5">
<?php echo form_open('admin/reply_messages'); ?>
	<div class="form-group">
		<textarea rows="10px" class="form-control" name="pesan" required></textarea>
	</div>
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $messages->id; ?>">
		<input type="hidden" name="email" value="<?php echo $messages->email; ?>">
		<input type="submit" value="Balas" class="btn btn-primary">
		<input type="reset" value="Cencel" class="btn btn-primary">
	</div>
<?php echo form_close(); ?>
</div>