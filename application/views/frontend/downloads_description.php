        <!--main starts-->
        <div id="main">
          <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Our Downloads</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Our Downloads</span>
                    </div>
                </div>
            </div>
                <!--container starts-->
                <div class="container">
                	<!--dt-sc-one-half starts-->
					<div class="dt-sc-hr"></div>
					
                    <div class="" style="margin: 5%;">
                    	<!--h2>Downloads</h2--> 
						
						<?php 
							foreach($downloads_description as $res)
							{
							?>
							
								<h2 style="margin-left: 20px;"><?php echo $res->title; ?></h2>
							<div class="column dt-sc-one">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="http://docs.google.com/gview?url=<?php echo base_url(); ?>upload/downloads/<?php echo $res->files; ?>&embedded=true" style="width:1000px;height:500px;"></iframe>
								</div>
							</div>
							<div class="column dt-sc-one">
								<p style="text-align:justify;"><?php echo $res->description; ?></p>
								<p>&nbsp;</p>
								<h2><a href="<?php echo base_url(); ?>upload/downloads/<?php echo $res->files; ?>" download style="background: #4cbcd4;
    color: #fff;
    padding: 6px 10px;">Download</a></h2>
							</div>
							<?php
							}
						?>

                    </div>      
                    <!--dt-sc-one-half ends-->
                    <!--dt-sc-one-half starts-->
                    
                    <!--dt-sc-one-half ends--> 
                    <div class="dt-sc-hr-very-small"></div>  
       
                    <!--dt-sc-one-half ends--> 
                </div>
                <!--container ends-->
             
               <!--primary ends-->
        </div>
        <!--main ends-->