<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skills International (SKILLS) – Pakistan</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="<?php echo $baseUrl; ?>assets/css/bootstrap.min.css" rel="stylesheet" />

 
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600" rel="stylesheet">-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<link href="<?php echo $baseUrl; ?>assets/css/css.css" rel="stylesheet" />
 
  <link href="<?php echo $baseUrl; ?>assets/css/animate.min.css" rel="stylesheet"> 
<!--  <link href="css/lightbox.css" rel="stylesheet">-->
  <link href="<?php echo $baseUrl; ?>assets/css/main.css" rel="stylesheet">
  <link href="<?php echo $baseUrl; ?>assets/css/responsive.css" rel="stylesheet">

<!-- Changes -->

<!-- Changes -->

</head> 
<!--scroll="no" style="overflow: hidden"-->
<body scroll="<?php if(isset($page) && $page=="home"){echo 'no'; }?>" style="<?php if(isset($page) && $page=="home"){echo 'overflow: hidden'; }?>">
<div class="head_wrapper">



<div class="top_wrapper">
	
		<div class="container">
			<div class="row">
				<div class="col-md-6">
<!--
				<div class="social_media1">
						    <ul>
								<li ><a href="#" class="fb1">0</a></li> 
<li ><a href="#" class="gm1">1</a></li>
<li ><a href="#" class="tw1">2</a></li>
<li ><a href="#" class="insta">3</a></li>
<li ><a href="#" class="lnk1">4</a></li>
							</ul>
					</div>
-->
				</div>
			
				<div class="col-md-6">
        <div class="flags_icons">
		<img src="<?php echo $baseUrl; ?>assets/images/flags_icons.png" alt=""/>
		</div>
               <div class="topwrappersett">
               <div class="topbuttonsett">
                <div class="top_header_btn"><a href="<?php echo $baseUrl; ?>approvedcenters">Find approved center</a></div>
                <div class="top_header_btn1"><a href="<?php echo $baseUrl; ?>cgcentre/register">Register as center</a></div>
               </div>
               

               </div>

<!--
					<div class="account_seciton">
						<div class="login"><a href="login.html">Login</a>
							<a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</a>
						</div>
						<div class="section_left1">/</div>
						<div class="Register"><a href="register.html">Register</a></div>
						
						<div class="country">
						<img src="images/england.png"/>
						<img src="images/Pakistan.png"/></div>
					</div>
-->
				</div>
			</div>

		</div>
</div>





<div class="menu_box">
<div class="menu_btm ">
	<div class="container">
		<div class="row">
            <div class="col-sm-12">
                <a href="<?php echo $baseUrl; ?>home" class="logo">
		<img src="<?php echo $baseUrl; ?>assets/images/logo.png" alt=""/>
		</a>

                
		<div class="menu_bx">
			
			 <div class="mobile_menu">
              	<a href="javascript:void(0);">
                	<span></span>
                	<span></span>
                	<span></span>
                </a>
              </div>
							<div class="menu">
								<ul>

<li><a href="<?php echo $baseUrl; ?>home" class="<?php if(isset($page) && $page=="home"){ ?> active <?php }?>">Home</a></li>
<li><a href="<?php echo $baseUrl; ?>aboutus" class="<?php if(isset($page) && $page=="aboutus"){echo 'active'; }?>">About Us</a></li>
<li><a href="<?php echo $baseUrl; ?>whatwedo" class="<?php if(isset($page) && $page=="whatwedo"){echo 'active'; }?>">What we do</a></li>    
<li><a href="<?php echo $baseUrl; ?>ourgoals" class="<?php if(isset($page) && $page=="ourgoals"){echo 'active'; }?>">Our Goals</a></li>      

<li><a href="<?php echo $baseUrl; ?>projects" class="<?php if(isset($page) && $page=="projects"){echo 'active'; }?>">Projects</a></li> 
<li><a href="<?php echo $baseUrl; ?>skillsinternational" class="<?php if(isset($page) && $page=="skillsinternational"){echo 'active'; }?>">Skills Consultancy</a></li> 

<!--
<li class="dropdown">
  <a href=""><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Partners</button></a>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="href="<?php echo $baseUrl; ?>cityandguild"">City & guilds</a>
    <a class="dropdown-item" href="href="<?php echo $baseUrl; ?>ilm"">ILM</a>
    <a class="dropdown-item" href="href="<?php echo $baseUrl; ?>assured"">Assured</a>

  </div>
</li>
-->


<li class="dropdown"><a href="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Partners</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item dropdownbacksett" href="<?php echo $baseUrl; ?>cityandguild">City & guilds</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="<?php echo $baseUrl; ?>ilm">ILM</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="<?php echo $baseUrl; ?>assured">Assured</a>

  </div>
<!--
                                    <ul>
                                    <li><a href="<?php echo $baseUrl; ?>cityandguild" class="<?php if(isset($page) && $page=="cityandguild"){echo 'active'; }?>">City & guilds</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>ilm" class="<?php if(isset($page) && $page=="ilm"){echo 'active'; }?>">ILM</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>assured" class="<?php if(isset($page) && $page=="assured"){echo 'active'; }?>">Assured</a></li>
    </ul>           
-->
</li>                
            
<li><a href="<?php echo $baseUrl; ?>stories" class="<?php if(isset($page) && $page=="stories"){echo 'active'; }?>">Success Stories</a></li> 
<li><a href="<?php echo $baseUrl; ?>newsandevent" class="<?php if(isset($page) && $page=="newsevent"){echo 'active'; }?>">News & Events</a></li>                                     
                                
<li><a href="<?php echo $baseUrl; ?>careers/form" class="<?php if(isset($page) && $page=="career"){echo 'active'; }?>">Careers</a></li>         
         
<li><a href="<?php echo $baseUrl; ?>contactus" class="<?php if(isset($page) && $page=="contactus"){echo 'active'; }?>">Contact us</a></li>
<!--
                                    <ul><li><a href="<?php echo $baseUrl; ?>technicalinstitutes" class="<?php if(isset($page) && $page=="technicalinstitutes"){echo 'active'; }?>">Technical Institutes</a></li>
    </ul>
-->


							  </ul>
							</div>
		</div>
            </div>
		<div class="col-sm-12">
		
		
		
		</div>
		</div>
	</div>
	</div>
</div>
