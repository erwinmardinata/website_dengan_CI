<h3><span class="glyphicon glyphicon-download-alt"></span> Unduh</h3><hr>
<?php 
	if($unduh == null){
	echo "<h3 align='center'>Data Kosong Bro</h3>";
}else{ ?>
<div class="panel-group" id="accordion">
<?php 
	foreach($unduh as $row):
?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->id_kat; ?>">
			<?php echo $row->kategori; ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $row->id_kat; ?>" class="panel-collapse collapse">
      <div class="panel-body">
	  <?php 
		$data = mysql_query("select * from data where id_kat = ".$row->id_kat); 
		if(mysql_num_rows($data) == null){
			echo "<p align='center'>Data kosong bro</p>";
		}else{
		while($list = mysql_fetch_array($data)){
		?>
		<p class="list-group-item"><?php echo $list['judul']; ?><a href="<?php echo base_url('assets/file/'.$list['title_file']); ?>"  style="float: right"><span class="glyphicon glyphicon-download-alt"></span></a></p>
		<?php } }?>
	  </div>
    </div>
  </div>
<?php endforeach; } ?>
</div>