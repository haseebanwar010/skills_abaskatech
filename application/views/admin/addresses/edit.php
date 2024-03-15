<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
        <?php if($this->session->flashdata('msg')){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>
        
        
        
    <section class="content-header">
      <h1>
        Update Addresses
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/addresses">Addresses</a></li>
        <li class="active">Update Address</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">

            <!-- /.box-header -->
            
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/addresses/edit/<?php echo $addresses[0]['id']; ?>" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?php echo $addresses[0]['id']; ?>">
    
                <div class="box-body">
                <!-- text input -->
            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Admin Email</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['a_email']; ?>" name="a_email" placeholder="">
                    </div>
                </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Facebook</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['facebook']; ?>" name="facebook" placeholder="">
                    </div>
                </div>
            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Twitter</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['twitter']; ?>" name="twitter" placeholder="">
                    </div>
                </div>
            
            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Google Plus</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['google_plus']; ?>" name="google_plus" placeholder="">
                    </div>
                </div>
                
            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Linkedin</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['linkedin']; ?>" name="linkedin" placeholder="">
                    </div>
                </div>

            <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Youtube</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['instagram']; ?>" name="instagram" placeholder="">
                    </div>
                </div>


</div>
           
                
            <div class="box-header with-border">
              <h3 class="box-title"><b>Pakistan Address 1</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_title1']; ?>" name="pak_title1" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_loc1']; ?>" name="pak_loc1" placeholder="">
                    </div>
                </div>
                  
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_phone1']; ?>" name="pak_phone1" placeholder="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_msg1']; ?>"  name="pak_msg1" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax No</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_fax1']; ?>"  name="pak_fax1" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Website Url</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_website1']; ?>" name="pak_website1" placeholder="">
                    </div>
                </div>
            </div>


            <div class="box-header with-border">
                <h3 class="box-title"><b>Pakistan Address 2</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_title2']; ?>" name="pak_title2" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_loc2']; ?>" name="pak_loc2" placeholder="">
                    </div>
                </div>
                  
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_phone2']; ?>" name="pak_phone2" placeholder="">
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_msg2']; ?>"  name="pak_msg2" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax No</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_fax2']; ?>"  name="pak_fax2" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Website Url</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['pak_website2']; ?>" name="pak_website2" placeholder="">
                    </div>
                </div>
            </div>


<!--
                <div class="col-md-12">
                    <div class="form-group">
                    	<label for="f_name">Address</label>
                       <input type="text"  class="form-control" value="<?php echo $settings[0]['address']; ?>"  id="address" name="address" placeholder="">
                    </div>
                </div>
-->

              
              
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 1</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title1']; ?>" name="siri_title1" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc1']; ?>" name="siri_loc1" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone1']; ?>" name="siri_phone1" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg1']; ?>" name="siri_msg1" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax1']; ?>" name="siri_fax1" placeholder="">
                    </div>
                </div>
              </div>
              
              
              
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 2</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title2']; ?>" name="siri_title2" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc2']; ?>" name="siri_loc2" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone2']; ?>" name="siri_phone2" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg2']; ?>" name="siri_msg2" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax2']; ?>" name="siri_fax2" placeholder="">
                    </div>
                </div>
              </div>
            
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 3</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title3']; ?>" name="siri_title3" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc3']; ?>" name="siri_loc3" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone3']; ?>" name="siri_phone3" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg3']; ?>" name="siri_msg3" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax3']; ?>" name="siri_fax3" placeholder="">
                    </div>
                </div>
              </div>
                
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 4</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title4']; ?>" name="siri_title4" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc4']; ?>" name="siri_loc4" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone4']; ?>" name="siri_phone4" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg4']; ?>" name="siri_msg4" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax4']; ?>" name="siri_fax4" placeholder="">
                    </div>
                </div>
              </div>                

            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 5</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title5']; ?>" name="siri_title5" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc5']; ?>" name="siri_loc5" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone5']; ?>" name="siri_phone5" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg5']; ?>" name="siri_msg5" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax5']; ?>" name="siri_fax5" placeholder="">
                    </div>
                </div>
              </div>
                
                
            <div class="box-header with-border">
              <h3 class="box-title"><b>Sirilanka Address 6</b></h3>
            </div>
                <div class="box-body">
                <!-- text input -->
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Title</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_title6']; ?>" name="siri_title6" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Location</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_loc6']; ?>" name="siri_loc6" placeholder="">
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Phone</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_phone6']; ?>" name="siri_phone6" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Mail</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_msg6']; ?>" name="siri_msg6" placeholder="">
                    </div>
                </div>
                 
                 <div class="col-md-6">
                    <div class="form-group">
                    	<label for="f_name">Fax</label>
                        <input type="text" class="form-control"  value="<?php echo $addresses[0]['siri_fax6']; ?>" name="siri_fax6" placeholder="">
                    </div>
                </div>
                 <div class="col-lg-12">
                    <div class="form-group">
                        <button class="btn bg-navy margin submitbtn" type="submit">Submit</button>
                    </div>
                </div> 
              </div>
                

              </form>
            
            <!-- /.box-body -->
          </div>
        </section>
    </div>






