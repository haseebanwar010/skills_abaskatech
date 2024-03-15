<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();
//echo "<pre>";
//var_dump($sitedata);
//exit;
?> 


<div class="clear"></div> 

<div class="banner_inner">
	<img src="<?php echo $baseUrl; ?>assets/images/banners/career.jpg"/>
</div>
<div class="clear"></div>  

<div class="container">

        
    
    <div class="row">
        <div class="contact career col-lg-12 col-sm-12">
            <h1>What means to be a part of SKILLS..</h1>
            <div class="lines"></div>
            <p>Our most valuable assets are our Employees. At SKILLS we strongly believe that empowered employee can do exceptional things.
 
As a service provider in every way; for us success is not only about the bottom line, it is all about quality and precision through and through. For this we need human touch and intellect in every step we take towards our goals. When it comes to growth, the company will always grow together with our employees where each person has a special role to play.
</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
     <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?> 

        <?php if(!empty($this->session->flashdata('error_msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
        </section>
    <?php } ?>
            <?php if(!empty($this->session->flashdata('msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>

<form method="post" action="" enctype="multipart/form-data">
<div class="row">
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="fname" value="<?php if(isset($_POST['fname'])){ echo $_POST['fname']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
  </div>
     </div>
    <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="lname" value="<?php if(isset($_POST['lname'])){ echo $_POST['lname']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number" required>
  </div>
     </div>
 </div>
 
<div class="row spacing">
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="file" name="resume" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
     </div>
 </div>
 
<div class="row">
     <div class="col-lg-2 col-sm-2"></div>
     <div class="col-lg-8 col-sm-8">
  <button type="submit" class="btn btn-block sbutton">Submit</button>
     </div>
     <div class="col-lg-2 col-sm-2"></div>
 </div>

</form>
        </div>
    </div>
</div>


