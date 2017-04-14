<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <?php if($slider == null){?>
      <li>
        <img src="<?php echo base_url().'assets/galery/olat_maras.jpg'; ?>" />
            <div class="caption">
              <h1>Beutifull Campus</h1>
            </div>
      </li>
      <?php }else{ foreach ($slider as $row): ?>
      <li>
        <img src="<?php echo base_url().'assets/galery/'.$row->photo; ?>" />
            <div class="caption">
              <p><?php echo $row->deskripsi; ?></p>
            </div>
      </li> 
      <?php endforeach; } ?>
    </ul>
  </div>
</section>