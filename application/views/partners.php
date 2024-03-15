<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 


<div class="clear"></div> 

<div class="banner_inner1">
	<img src="<?php echo $baseUrl;?>assets/images/contactuspic.png"/>
</div>
<div class="clear"></div>  
<div class="container aboutuscontent">
    <div class="row">
        <div class="whatwedo col-lg-12 col-sm-12">
            <h1><?php echo $aboutus['title']; ?></h1>
            <div class="content"><p><?php echo $aboutus['description']; ?></p></div>
        </div>
    </div>
</div>


<div class="clear"></div>