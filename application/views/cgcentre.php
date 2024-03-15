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
	<img src="<?php echo $baseUrl; ?>assets/images/banners/partners.jpg"/>
</div>
<div class="clear"></div>  

<div class="container">

        
    
    <div class="row">
        <div class="contact career col-lg-12 col-sm-12">
            <h1>Register as a C&G Centre</h1>
            <div class="lines"></div>
         
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
                <?php if(!empty($this->session->flashdata('validation_errors_captcha'))){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?=$this->session->flashdata('validation_errors_captcha')?>
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
    <input type="text" name="centre_name" value="<?php if(isset($_POST['centre_name'])){ echo $_POST['centre_name']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Centre Name" required>
  </div>
     </div>
        <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="location" value="<?php if(isset($_POST['location'])){ echo $_POST['location']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Location" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="person_name" value="<?php if(isset($_POST['person_name'])){ echo $_POST['person_name']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Focal Person Name" required>
  </div>
     </div>
    </div>
<div class="row">
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" required>
  </div>
     </div>
    <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="number_years" value="<?php if(isset($_POST['number_years'])){ echo $_POST['number_years']; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of years established" required>
  </div>
     </div>
 </div>
 
<div class="row spacing">
    <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
      <select name="organization_type" required>
          <option value="">Please select type of organization</option>
          <option value="Public">Public</option>
          <option value="Private">Private</option>
      </select>
  </div>
     </div>
    <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
      <select name="qualification" required>
          <option value="">Please select qualifications</option>
          <option value="CONSTRUCTION – ENGINEERING">CONSTRUCTION – ENGINEERING</option>
          <option value="ELECTRICAL & ELECTRONICS – ENGINEERING">ELECTRICAL & ELECTRONICS – ENGINEERING</option>
          <option value="MANUFACTURING TECHNOLOGY – ENGINEERING">MANUFACTURING TECHNOLOGY – ENGINEERING</option>
          <option value="MAINTAINANCE TECHNOLOGY – ENGINEERING">MAINTAINANCE TECHNOLOGY – ENGINEERING</option>
          <option value="FABRICATION & WELDING – ENGINEERING">FABRICATION & WELDING – ENGINEERING</option>
          <option value="HAIR & BEAUTY">HAIR & BEAUTY</option>
          <option value="SALES - BUSINESS SKILLS">SALES - BUSINESS SKILLS</option>
          <option value="MARKETING - BUSINESS SKILLS">MARKETING - BUSINESS SKILLS</option>
          <option value="COMPUTERISED ACCOUNTING - BUSINESS SKILLS">COMPUTERISED ACCOUNTING - BUSINESS SKILLS</option>
          <option value="ENGLISH FOR BUSINESS COMMUNICATION - BUSINESS SKILLS">ENGLISH FOR BUSINESS COMMUNICATION - BUSINESS SKILLS</option>
          <option value="EMPLOYABILITY SKILLS - BUSINESS SKILLS">EMPLOYABILITY SKILLS - BUSINESS SKILLS</option>
          <option value="SOCIAL MEDIA FOR BUSINESS">SOCIAL MEDIA FOR BUSINESS</option>
          <option value="RETAIL KNOWLEDGE">RETAIL KNOWLEDGE</option>
          <option value="ENGLISH LANGUAGE">ENGLISH LANGUAGE</option>
          <option value="FOOD PREPARATION & CULINARY ARTS – HOSPITALITY">FOOD PREPARATION & CULINARY ARTS – HOSPITALITY</option>
          <option value="FOOD & BEVERAGE SERVICES - HOSPITALITY">FOOD & BEVERAGE SERVICES - HOSPITALITY</option>
          <option value="RECEPTION OPERATION SERVICES - HOSPITALITY">RECEPTION OPERATION SERVICES - HOSPITALITY</option>
          <option value="ACCOMMODATION OPERATOIN SERVICES - HOSPITALITY">ACCOMMODATION OPERATOIN SERVICES - HOSPITALITY</option>
          <option value="INTERNATIONAL TOURISM – HOSPITALITY">INTERNATIONAL TOURISM – HOSPITALITY</option>
          <option value="BARISTA SKILLS - HOSPITALITY">BARISTA SKILLS - HOSPITALITY</option>
          <option value="FASHION / TEXTILE">FASHION / TEXTILE</option>
          <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
          <option value="COMPUTER AIDED DESIGN (CAD)">COMPUTER AIDED DESIGN (CAD)</option>
          <option value="ILM – INSTITUTE OF LEADERSHIP AND MANAGEMENT ">ILM – INSTITUTE OF LEADERSHIP AND MANAGEMENT </option>
          <option value="ASSURED SERVICES">ASSURED SERVICES</option>
      </select>
  </div>
     </div>
     
 </div>
    <div class="row spacing">
         <div class="col-lg-4 col-sm-4">
          <div class="form-group form_handle">
                                    <label for="captcha"><?php echo $captcha['image']; ?></label>
                            <input type="text" required autocomplete="off" name="userCaptcha"
                                   placeholder="Enter above text" class="form-control"
                                   value="<?php if (!empty($userCaptcha)) {
                                       echo $userCaptcha;
                                   } ?>"/>
                                  
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

