<script>
function validateForm() {
    var x = document.forms["alert"]["desk"].value;
    if (x == null || x == "") {
        alert("Deskripsinya harus di isi Bang!!!");
        return false;
    }
}
</script>
<h3><span class="glyphicon glyphicon-film"></span> Input Galery</h3><hr>
<form name="alert" action="<?php echo base_url('admin/insert_galery'); ?>"  enctype="multipart/form-data" onsubmit="return validateForm()" method="post">
	<input type="file" id="exampleInputFile" name="photo"><?php echo $error; ?>
    <p class="help-block">* jpeg|jpg|png|gip</p><br>
    <strong>Deskripsi :</strong>
    <textarea class="form-control" rows="3" name="desk"></textarea>
    <button type="submit" name="simpan" class="btn btn-default"><span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
</form>