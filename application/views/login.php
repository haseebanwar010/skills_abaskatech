<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Login - Skills International</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
    
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/dist/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
   
   
    <div class="login-box">
     <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>    

     <!-- <div class="login-logo">
        <a href="<?php echo site_url()?>"><img src="<?php echo $baseUrl?>assets/images/logo.png" width="300" /></a>
      </div>--><!-- /.login-logo -->
      <?php if(isset($msg)){ ?>
        <section class="msg">
         <div class="alert alert-error">
        <a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $msg?>  
        </div>
        </section>                 
        <?php } ?>
        <?php if(isset($reset)){ ?>
        <section class="msg">
         <div class="alert">
        <a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>
            <?=$reset?>  
            </div>
        </section>                 
        <?php } ?>
      <div class="login-box-body">
        
        <form action="<?php echo base_url('auth/login');?>" method="post" enctype="multipart/form-data">
          <div class="form-group has-feedback">
           <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="User Name" name="name" >
           
          </div>
          <div class="form-group has-feedback">
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <input type="password" class="form-control" placeholder="Password" name="password" >
           
          </div>
<!--
          <div class="form-group has-feedback">
           <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <input type="email" class="form-control" placeholder="Email" name="email" >
           
          </div>
-->
          
          <div class="row">
            
            <div class="col-xs-12">
              <button type="submit" class="btn btn-block bg-navy adminloginbtn">LOGIN</button>
            </div><!-- /.col -->
          </div>
        </form><br />
        <a class="fp-link" href="<?php echo base_url('auth/forgot_password')?>">Forgot Password</a>

       


      </div><!-- /.login-box-body -->
      
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $baseUrl?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $baseUrl?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo $baseUrl?>assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
