<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 


<div class="clear"></div> 

<div class="banner_inner1">
	<img src="<?php echo $baseUrl;?>assets/images/banners/ourgoal.jpg"/>
</div>
<div class="clear"></div>  
<div class="container">
    <div class="row">
        <div class="whatwedo col-lg-12 col-sm-12">
            <h1><?php echo $ourgoals['title']; ?></h1>
            <p><?php echo $ourgoals['description']; ?></p>
        </div>
    </div>
</div>
   
<!--
    <div class="row">
        <div class="whatwedo upgradewhatwe col-lg-12 col-sm-12">
          <h2>Vision</h2>

<h3>To be the most preferred service provider in economic development sectors, and in tertiary education ensuring the enrichment of communities &amp; institutions.</h3>
        </div>
</div>

    <div class="row">
        <div class="whatwedo upgradewhatwe col-lg-12 col-sm-12">
<h2>Mission</h2>

<h3>To deliver our services with professionalism constantly persisting to find&nbsp;the most bespoke, cost-effective solutions that provide sustainable and environment-friendly outcomes to our clients and stakeholders.</h3>
        </div>
</div>
-->


<div class="clear"></div>