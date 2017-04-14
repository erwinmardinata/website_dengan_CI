<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
    <style type="text/css">
    	.navbar-default{
			 background-color:#000;
			 border-radius: 0;
		  }
      a:hover{
        text-decoration: none;
      }
      .input-group{
        margin-bottom: 20px;
      }
    </style>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-1.11.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
</head>
<body>	
    <?php echo $_header; ?>
    
    <div class="container-fluid">
    <div class="row" style="background-color:#fff;">
    	<div class="col-lg-3 col-md-3">
        <?php echo $_sidebar; ?>
      </div>
        
      <div class="col-lg-9 col-md-9">
        <?php echo $_content; ?>
      </div>
        <?php echo $_footer; ?>
    </div>   
    </div>
</body>
</html>