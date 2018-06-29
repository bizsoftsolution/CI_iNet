        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Gallery</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Gallery</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
				
            	<!--primary starts-->
				
            	<section id="primary" class="content-full-width" style="padding:0px;">
				<h2 class="dt-sc-hr-green-title" style="margin:0px;"> <?php 
						foreach($gallery_view as $row)
						{
							echo $row->title;
						}?></h2>
						<div>&nbsp;</div>
                    <!--dt-sc-portfolio-container starts-->
                    <div class="dt-sc-portfolio-container">
                        <div class="dt-sc-one column" style="margin: 0px 0px">
							<p style="    margin: 0px 0px 0px 10px;
    padding: 0px;
    font-size: 15px;
    text-align: justify;"><?php echo $row->description; ?></p>
						</div>
						<div>&nbsp;</div>
						<div>&nbsp;</div>
						<?php 
						foreach($gallery_view as $row)
						{
							$egallery = explode(',', trim($row->images, ","));
							foreach($egallery as $res)
							{
							?>
						<div class="portfolio dt-sc-one-third column first" style="padding:15px;">
							<img class="fs-gal sli_image" src="<?php echo base_url(); ?>upload/gallery/<?php echo $res; ?>" alt="" data-url="<?php echo base_url(); ?>upload/gallery/<?php echo $res; ?>" style="width:100%;height:250px;"/>
							<div class="fs-gal-view">
							  <h1><?php echo $row->title; ?></h1>
							  <img class="fs-gal-prev fs-gal-nav" src="<?php echo base_url(); ?>assets/frontend/popup/img/prev.svg" alt="Previous picture" title="Previous picture" />
							  <img class="fs-gal-next fs-gal-nav" src="<?php echo base_url(); ?>assets/frontend/popup/img/next.svg" alt="Next picture" title="Next picture" />
							  <img class="fs-gal-close" src="<?php echo base_url(); ?>assets/frontend/popup/img/close.svg" alt="Close gallery" title="Close gallery" />
							</div>
						</div>
                        <!--div class="portfolio dt-sc-one-third column first">
                            <div class="portfolio-thumb">
                            	<!--img class="item-mask" src="<?php echo base_url(); ?>assets/frontend/images/portfolio-mask.png" alt="" title=""->
                                <img src="<?php echo base_url(); ?>upload/gallery/<?php echo $res; ?>" alt="" title="" style="width:100%;height:100%;padding:0px 15px 0 0">
                                <div class="image-overlay">
                                    <!--a href="" class="link"><span class="fa fa-link"></span></a->
                                    <a href="<?php echo base_url(); ?>upload/gallery/<?php echo $res; ?>" data-gal="prettyPhoto[gallery]" class="zoom" style="    right: 46%;"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div-->
                        <?php 
							}
						}
						?>
                        
                       
                        
                    </div>
                    <!--dt-sc-portfolio-container ends-->
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
			
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
        </div>
        <!--main ends-->
		<!--footer starts-->
        <footer style="padding:0px;">
            
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container" >
                	<p class="copyright-info" >© 2018 iNET. All rights reserved. <!--Design by <a href="https://graspsoftwaresolutions.com/" target="_blank" title="" style="text-align: center;float: none;"> grasp software solution</a--></p>
        			<div class="footer-links">
                        <p>Follow us</p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="#"><img src="<?php echo base_url(); ?>assets/frontend/images/pinterest.png" alt="" title=""></a></li>
                        </ul>
                    </div>
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>
    <!--Java Scripts-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-migrate.min.js"></script>

   
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.inview.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.bxslider.min.js"></script>       
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.prettyPhoto.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.parallax-1.1.3.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/shortcodes.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>
    
    <!-- Layer Slider --> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-transit-modified.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/layerslider.kreaturamedia.jquery.js"></script> 
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/frontend/js/greensock.js"></script> 
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/frontend/js/layerslider.transitions.js"></script> 
    <!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
    <script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/popup/js/fs-gal.js"></script>
	
	<?php
			$date = new DateTime();
			$current_timestamp = $date->getTimestamp();
		?>
		
	<script>
		    flag_time = true;
			timer = '';
			setInterval(function(){phpJavascriptClock();},1000);
			
			function phpJavascriptClock()
			{
				if ( flag_time ) {
				timer = <?php echo $current_timestamp;?>*1000;
				}
				var d = new Date(timer);
				months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
				
				month_array = new Array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'Augest', 'September', 'October', 'November', 'December');
				
				day_array = new Array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
				
				currentYear = d.getFullYear();
				month = d.getMonth();
				var currentMonth = months[month];
				var currentMonth1 = month_array[month];
				var currentDate = d.getDate();
				currentDate = currentDate < 10 ? '0'+currentDate : currentDate;
				
				var day = d.getDay();
				current_day = day_array[day];
				var hours = d.getHours();
				var minutes = d.getMinutes();
				var seconds = d.getSeconds();
				
				//var ampm = hours >= 12 ? 'PM' : 'AM';
				//hours = hours % 12;
				//hours = hours ? hours : 12; // the hour ’0′ should be ’12′
				hours = hours < 10 ? '0'+hours : hours;
				minutes = minutes < 10 ? '0'+minutes : minutes;
				seconds = seconds < 10 ? '0'+seconds : seconds;
				var strTime = hours + ':' + minutes+ ':' + seconds;
				timer = timer + 1000;
				
				
				document.getElementById("demo3").innerHTML= strTime ;
				
				document.getElementById("demo4").innerHTML= current_day + ' , ' +currentMonth1+' ' + currentDate+' , ' + currentYear;
				
				
				flag_time = false;
			}

		</script>
</body>
</html>