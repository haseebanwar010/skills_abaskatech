<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();
//echo "<pre>";
//var_dump($sitedata);
//exit;
?>   
<div class="<?php if(isset($page) && $page=="home"){echo 'menu_box_footer';} else{echo 'menu_box_footer1';}?>">
<div class="clear"></div> 	
<div class="<?php if(isset($page) && $page=="home"){echo 'menu_top';} else{echo 'footercolor';}?>">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-3">
                    <div class="social_media">
						
							<ul>
								<li ><a href="<?php echo $sitedata->facebook;?>" class="fb"></a></li> 
<li ><a href="<?php echo $sitedata->google_plus;?>" class="gm"></a></li>
<li><a href="<?php echo $sitedata->twitter;?>"  class="tw"></a></li>
<li ><a href="<?php echo $sitedata->linkedin;?>" class="lnk"></a></li>
<li ><a href="<?php echo $sitedata->instagram;?>" class="youtube"></a></li>
							</ul>
						</div>
						</div>
			<div class="col-sm-9">
				
				
				<div class="copy_rightss">
				
					
					© 2018 skills  © 2018. Powered By: <a href="http://www.abaskatech.com/">Abaskatech
				</a>
				</div>
				<div class="clear"></div>
			</div>
			
		</div>
		
	</div>
	
</div>
</div>




</div>

<div class="clear"></div>


	
	
	
</body>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

 
 
 
  <script src="<?php echo $baseUrl;?>assets/js/bootstrap.min.js"></script>
     
    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>
		

  <script type="text/javascript" src="<?php echo $baseUrl; ?>assets/js/main.js"></script>
  
<script type="text/javascript">
    $(document).ready(function(){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').hide();
        $('#approved_center').change(function(){
           var selected_val=$(this).val();
            if(selected_val==1){
                $('#table1').show();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').hide();
            }
            else if(selected_val==2){
                $('#table1').hide();
                $('#table2').show();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').hide();
            }
            else if(selected_val==3){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').show();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').hide();
            }
            else if(selected_val==4){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').show();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').hide();
            }
            else if(selected_val==5){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').show();
                $('#table6').hide();
                $('#table7').hide();
            }
            else if(selected_val==6){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').show();
                $('#table7').hide();
            }
            else if(selected_val==7){
                $('#table1').hide();
                $('#table2').hide();
                $('#table3').hide();
                $('#table4').hide();
                $('#table5').hide();
                $('#table6').hide();
                $('#table7').show();
            }
        });
        });
</script>
  
  
  

</html>

