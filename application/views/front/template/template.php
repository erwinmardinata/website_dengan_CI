<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teknik Informatika - UTS Sumbawa</title>
    <link href="<?php echo base_url('assets/images/uts.png'); ?>" rel='shortcut icon'/>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/costum.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/plugins/flexslider.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-1.11.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.supercal.js'); ?>"></script>
  </head>
<body>
  <?php echo $_header; ?>

<div class="main container" style=" margin-bottom: 0; margin-top: 70px;">

  <div class="row"  style="background-color:#fff; padding-top: 15px; padding-bottom: 27px;">
  <!-- sidebar-kanan- -->
    <div class="col-lg-3   col-md-3">
    <?php echo $_sidebarkiri; ?>
    </div>
  <!-- end sidebar-kanan --> 
  <!-- konten -->
    <div class="col-lg-6 col-md-6">
      <article>
        <?php echo $_content; ?>
      </article>
    </div>
  <!-- end konten -->
  <!-- sidebar-kanan- -->
    <div class="col-lg-3   col-md-3">
    <?php echo $_sidebarkanan; ?>
    </div>
   <!-- end sidebar-kanan --> 
  </div>
</div>

<div class="main row" style="background: #efefef; padding-top: 15px;">
<?php echo $_footer; ?>
</div>
<script src="<?php echo base_url('assets/bootstrap/plugins/jquery.flexslider-min.js'); ?>"></script>
<script type="text/javascript">
$(window).load(function(){
$('.flexslider').flexslider({
animation : "slide",
controlNav  : false,
start   : function(slider){
$('body').removeClass('loading');
}
});
});
</script>
<script src="<?php echo base_url('assets/bootstrap/plugins/jquery.easing.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/plugins/jquery.mousewheel.js'); ?>"></script>
</body>
</html>