<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
if($result)
{

?>

<div class="banners"> 
	<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
      <?php $flag=0;
       foreach($result as $record){
           $flag++;
        ?>
        <div class="item <?php if($flag==1){ echo 'active'; } ?>" style="background-image: url(<?php echo base_url('uploads/'.$record->image); ?>);">

      	<div class="text_info">
      		<h3 class="animated fadeInUpBig">Skills International </h3>
      		<h4 class="animated fadeInLeftBig">Studying science
from a new angle</h4>
      		<p class="animated fadeInRightBig"></p>
      
      		 <div class="banner_btn animated fadeInUpBig"><a href="<?php echo $baseUrl; ?>cgcentre/register">Register as center</a></div>
      	</div>
        </div>
        <?php }?>
        

        
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>


    </div>
</div>


<?php    

}
?>