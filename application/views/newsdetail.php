<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 


<div class="clear"></div> 

<div class="banner_inner1">
	<img src="<?php echo $baseUrl;?>assets/images/contactuspic.png"/>
</div>
<div class="clear"></div>  

<div class="newsandevents">
<div class="container">
    <div class="row">
        <div class="whatwedo col-lg-12 col-sm-12">
            <h1>News Detail</h1>
        </div>
    </div>
</div>
</div>

<div class="clear"></div>

<div class="container">
    
       <?php if($news){ ?>
        <div class="row">
               <div class="det_head_sett col-lg-12 col-sm-12">
                   <h3><?php echo $news['title']; ?></h3>
               </div>
               <div class="det_head_sett col-lg-12 col-sm-12">
                   <h5 class=""><?php echo $news['date']; ?></h5>
               </div>
           </div>
           
    <div class="row">
        <div class="det_head_sett col-lg-12 col-sm-12">


        <p><?php echo $news['description']; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6">


            <div class="det_new_image">
            <img src="<?php echo $baseUrl;?>uploads/<?php echo $news['image'];?>">
            </div>

          </div>
          </div>


       
         


        <?php } ?>
   
</div>
<br/>

    



<div class="clear"></div>