<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?> 


<div class="clear"></div> 

<div class="banner_inner1">
	<img src="<?php echo $baseUrl;?>assets/images/banners/newsandevent.jpg"/>
</div>
<div class="clear"></div>  

<div class="newsandevents">
<div class="container">
    <div class="row">
        <div class="newsandevents1 col-lg-12 col-sm-12">
            <h1><?php echo $newsevent['title']; ?></h1>
            <p><?php echo $newsevent['description']; ?></p>
        </div>
    </div>
</div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row ">
       <?php $flag=0; foreach($news as $record){ $flag++; ?>
        <div class="col-lg-6 col-sm-6">
           <div class="extract">
            <div class="news">
				<div class="news_pic" style="background-image: url(<?php echo base_url('uploads/'.$record['image']);?>)"></div>
							<div class="director_info">
								<h5 class=""><?php echo $record['date']; ?></h5>
								<h6 class=""><?php echo $record['title']; ?></h6>
                                <p><?php echo substr($record['description'],0,190)."....."; ?></p>
                                <p class="newseventssett"><a href="<?php echo $baseUrl;?>newsandevent/getspecificnews/<?php echo $record['id']; ?>">Read more</a></p>
							</div>
            </div>
            </div>
        </div>
        <?php if($flag%2==0){ ?>
        <div class="clear"></div>
        <?php } ?>
        <?php } ?>
     </div>
</div>
<br/>

    



<div class="clear"></div>