<h3><span class="glyphicon glyphicon-envelope"></span> Kontak</h3><hr>
<form role="form" method="post" action="<?php echo base_url('content/input_kontak'); ?>">
  <div class="form-group">
    <label>Nama :</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda *" required>
  </div>
  <div class="form-group">
    <label>Email :</label>
    <input type="email" name="email"  class="form-control" placeholder="Masukkan Email Anda *" required>
  </div>
  <div class="form-group">
    <label>Pesan :</label>
    <textarea class="form-control" name="pesan" rows="7px" placeholder="Masukkan Pesan Anda *" required></textarea>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Kirim">
  <input type="reset" name="reset" class="btn btn-primary" value="Cencel">
</form>
