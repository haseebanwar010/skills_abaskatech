<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 


<div class="clear"></div> 

<div class="banner_inner1">
	<img src="<?php echo $baseUrl;?>assets/images/banners/partners.jpg"/>
</div>
<div class="clear"></div>  
<div class="container aboutuscontent">
    <div class="row">
        <div class="whatwedo col-lg-12 col-sm-12">
            <h1><?php echo $ilm['title']; ?></h1>
            <img src="<?php echo $baseUrl;?>uploads/<?php echo $ilm['image']; ?> "/>
            <div class="content"><p><?php echo $ilm['description']; ?></p></div>
        </div>
    </div>
</div>


<div class="clear"></div>