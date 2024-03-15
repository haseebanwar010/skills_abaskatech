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
	<img src="<?php echo $baseUrl; ?>assets/images/banners/contactusu.jpg"/>
</div>
<div class="clear"></div>  

<div class="container">

        
    
    <div class="row">
        <div class="contact col-lg-12 col-sm-12">
            <h1>CONTACT US</h1>
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

        <?php if(!empty($this->session->flashdata('msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>

<form method="post" action="<?php echo $baseUrl;?>contactus/contact_us">
<div class="row">
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Country" required>
  </div>
     </div>
 </div>
 
<div class="row spacing">
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone" required>
  </div>
     </div>
     <div class="col-lg-4 col-sm-4">
  <div class="form-group form_handle">
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone" required>
  </div>
     </div>
 </div>
 
<div class="row">
     <div class="col-lg-2 col-sm-2"></div>
     <div class="col-lg-8 col-sm-8">
  <div class="form-group">
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" placeholder="How we can help you." required></textarea>
  </div>
  <div class="form-check">
    <label class="form-check-label " for="exampleCheck1">I prefer to be contacted through</label>
    <input type="checkbox" name="contact[]" value="Phone" class="form-check-input" id="exampleCheck2" required>
    <label class="form-check-label diffc" for="exampleCheck2">Phone</label>
    <input type="checkbox" name="contact[]" value="Fax" class="form-check-input" id="exampleCheck3">
    <label class="form-check-label diffc" for="exampleCheck3">Fax</label>
    <input type="checkbox" name="contact[]" value="Email" class="form-check-input" id="exampleCheck4">
    <label class="form-check-label diffc" for="exampleCheck4">E-mail</label>
    <input type="checkbox" name="contact[]" value="Post" class="form-check-input" id="exampleCheck5">
    <label class="form-check-label diffc" for="exampleCheck5">Post</label>
  </div>
  <button type="submit" class="btn btn-block sbutton">SEND</button>
     </div>
     <div class="col-lg-2 col-sm-2"></div>
 </div>

</form>
        </div>
    </div>
</div>

<div class="container pakcon">
   <div class="row">
       <div class="col-lg-12 col-sm-12 paksetting">
          <img src="<?php echo $baseUrl; ?>assets/images/pak.png"/>
           <h1>Pakistan</h1>
       </div>
   </div>
   <div class="row">
       <div class="col-lg-6 col-sm-6 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->pak_title1;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->pak_loc1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->pak_phone1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->pak_msg1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->pak_fax1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/world.png"/><p><?php echo $sitedata->pak_website1;?></p></li>
          </ul>
          </div>
       </div>
       
       <div class="col-lg-6 col-sm-6 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->pak_title2;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->pak_loc2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->pak_phone2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->pak_msg2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->pak_fax2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/world.png"/><p><?php echo $sitedata->pak_website2;?></p></li>
          </ul>
        </div>
       </div>
   </div>
    
</div>


<div class="container">
   <div class="row">
       <div class="col-lg-12 col-sm-12 sirisetting">
          <img src="<?php echo $baseUrl; ?>assets/images/siri.png"/>
           <h1>Srilanka</h1>
       </div>
   </div>
   <div class="row extract">
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title1;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg1;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax1;?></p></li>
          </ul>
          </div>
       </div>
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title2;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg2;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax2;?></p></li>
          </ul>
          </div>
       </div>
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title3;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc3;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone3;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg3;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax3;?></p></li>
          </ul>
          </div>
       </div>
       
   </div>

   <div class="row extract">
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title4;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc4;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone4;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg4;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax4;?></p></li>
          </ul>
          </div>
       </div>
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title5;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc5;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone5;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg5;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax5;?></p></li>
          </ul>
          </div>
       </div>
       <div class="col-lg-4 col-sm-4 ">
         <div class="pakistanadd">
          <h4><?php echo $sitedata->siri_title6;?></h4> 
          <ul>
        <li><img src="<?php echo $baseUrl; ?>assets/images/location.png"/><p><?php echo $sitedata->siri_loc6;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/call.png"/><p><?php echo $sitedata->siri_phone6;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/message.png"/><p><?php echo $sitedata->siri_msg6;?></p></li>
        <li><img src="<?php echo $baseUrl; ?>assets/images/printer.png"/><p><?php echo $sitedata->siri_fax6;?></p></li>
          </ul>
          </div>
       </div>
       
   </div>
    
</div>
