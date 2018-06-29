<!DOCTYPE HTML>
<html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>iNET</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/new/favicon.png" type="image/x-icon" />
<link href="<?php echo base_url(); ?>assets/frontend/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="<?php echo base_url(); ?>assets/frontend/css/layerslider.css" type='text/css' media='all' />
<!--prettyPhoto-->
<link href="<?php echo base_url(); ?>assets/frontend/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!--[if IE 7]>
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="<?php echo base_url(); ?>assets/frontend/js/modernizr-2.6.2.min.js"></script>
<!--popup-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/popup/css/fs-gal.css" />


<style type="text/css">


#Date { text-align: right;
    color: #f7941e;}

.clock ul {margin:0 auto; padding:0px; list-style:none; text-align:right; }
.clock ul li { display:inline; font-size:14px; text-align:center; color: #f7941e;}


</style>
<!--font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #f7941e; -->
</head>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <header>
            <div class="container">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>Front" title="Inet"><img src="<?php echo base_url(); ?>assets/frontend/images/inetlogo.png" alt="Inet" title="Inet" style="padding:10px; 0;height: 100px;"></a>
                </div>
                <div class="contact-details" style="margin: 12px 0px 0px 0px;">
					
					<p id='demo4' style="color: #f7941e;"></p>
					<p id='demo3' style="color: #f7941e;"></p>
					<p style="font-size: 18px;font-weight: bold;margin: 14px 0 0 0;"><a style="color: #262262;" href="http://member.inet2u.com/" target="_blank"><i class="fa fa-lock" style="color: #262262;"></i>&nbsp;&nbsp;&nbsp;Member Login</a></p>
                    <!-- <p class="mail">
                        <a href="#">demo@demo.com</a>
                        <span class="fa fa-envelope"></span>
					</p>
                    <p class="phone-no">
                        <i>+1 987 654 3210</i>
                        <span class="fa fa-phone"></span>
                	</p> -->        
                </div>
            </div>
            <!--menu-container starts-->
            <div id="menu-container" style="    border-top: 5px solid #f7941e;">
                <div class="container">
                    <!--nav starts-->
                      <nav id="main-menu" style="float: right;">
                    	<div class="dt-menu-toggle" ><span style="font-size: 18px;font-weight: bold;"><a style="color: #fff;font-size: 14px;" href="http://member.inet2u.com/" target="_blank"><i class="fa fa-lock" style="color: #fff;"></i>&nbsp;&nbsp;&nbsp;Member Login</a></span><span id="dt-menu-toggle" class="dt-menu-toggle-icon"></span></div>
                        <ul id=" menu-main-menu" class="menu">
                            <li class="current_page_item"> <a href="<?php echo base_url(); ?>Front" style="border-color: #f7941e;"> Home </a> 
                                <!--ul class="sub-menu">
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a>  </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> 
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a>  </li>
                                        </ul>   
                                        <a class="dt-menu-expand">+</a>                             
                                    </li>
                                </ul>  
                                <a class="dt-menu-expand">+</a-->                      
                            </li>
							<li class="blue"> <a href="<?php echo base_url(); ?>Front/aboutus" style="border-color: #f7941e;"> About Us </a> </li>
                            <li class="mustard"> <a href="<?php echo base_url(); ?>Front/news" style="border-color: #f7941e;"> News </a> </li>
                            <li class="green"> <a href="<?php echo base_url(); ?>Front/product" style="border-color: #f7941e;"> Product </a> </li>
                            
                            <li class=" menu-item-simple-parent menu-item-depth-0 blue"><a href="" title="" style="border-color: #f7941e;">Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url(); ?>Front/video">video Gallery</a></li>
                                    <li><a href="<?php echo base_url(); ?>Front/gallery">Image Gallery</a>
                                    </li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            <li class=" menu-item-simple-parent menu-item-depth-0 yellow"> <a href="<?php echo base_url(); ?>Front/achivements" style="border-color: #f7941e;"> Achievements </a> </li>
                            <li class="pink"><a href="<?php echo base_url(); ?>Front/contactus" title="" style="border-color: #f7941e;">Contact us</a></li>
                            <li class="purple"><a href="<?php echo base_url(); ?>Front/downloads" title="" style="border-color: #f7941e;">Downloads</a></li>
                            
                        </ul>
                    </nav>
                    <!--nav ends-->

                    <ul class="dt-sc-social-icons" style="height:0px;">
                        <!--li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="#" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" title="Google Plus" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li-->
                    </ul>
                </div>
            </div>
            <!--menu-container ends-->
        </header>