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
  </head>
<body>

	 <?php echo $_header; ?>

<div class="container" style="padding-top: 70px">
<!-- photo slide -->
  <div class="col-lg-12 col-md-12"  style="padding:0;">

	 <?php echo $_slider; ?>

  </div>
<!-- end photo slide -->
</div>
<div class="main container" style=" margin-bottom: 0;">

  <div class="row"  style="background-color:#fff; padding-top: 15px; padding-bottom: 27px;">
  <!-- konten -->
    <div class="col-lg-8 col-md-8">
		 <?php echo $_content; ?>
    </div>
  <!-- end konten -->
  <!-- sidebar -->
    <div class="col-lg-4   col-md-4">
		 <?php echo $_sidebar; ?>
    </div>
   <!-- end sidebar --> 
  </div>
</div>

<div class="main row" style="background: #efefef; padding-top: 15px;">

	<?php echo $_footer; ?>

</div>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.11.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
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