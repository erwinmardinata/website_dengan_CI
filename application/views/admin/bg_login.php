<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style type="text/css">
      body{
        padding-top: 27px;
      }
    </style>
</head>
<body>	
<div class="container">
  <div class="row">
  <div class="col-lg-4 col-md-4"></div>
  <div class="col-lg-4 col-md-4">
  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #999; padding: 20px; text-align: center;">
      <h3 class="panel-title"><?php echo $title; ?></h3>
    </div>
    <div class="panel-body">
    <? echo $sukses; ?>
      <br><div style="text-align: center"><img src="<?php echo base_url().'assets/images/user.png'; ?>" alt="" class="img-rounded" width="200px" height="200px"></div><br>
      <?php echo form_open('admin/login_admin'); ?>
        <div class="form-inline" role="form" style="text-align: center">
          <div class="form-group input-group-lg">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="username" class="form-control" placeholder="Username">
              </div>
          </div><br><br>
          <div class="form-group input-group-lg">
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
          </div><br><br>
          <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-lock"></span> Masuk</button>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
  <div class="col-lg-4 col-md-4"></div>
  </div>
  </div>
</div>
	<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.11.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>