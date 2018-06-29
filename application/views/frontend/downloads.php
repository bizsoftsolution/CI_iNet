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
          <!--section class="fullwidth_banner">
            	<div class="container">
	            	<h1>Our Downloads</h1>
                </div>
            </section-->
                <!--container starts-->
                <div class="container">
                	<!--dt-sc-one-half starts-->
					<div class="dt-sc-hr"></div>
					<h2 class="dt-sc-hr-green-title">Downloads</h2>
					
					
                    <div class="" style="    margin: 2% 5%;">
                    	 
						
						<?php 
							$data7 = $this->db->order_by("udate", "DESC")->get_where("tbl_downloads", array('cat_id'=>$cat_id))->result();
							foreach($data7 as $row)
							{
						?>
							<div class="events-list">
								<!--div class="event-thumb">
									<a href="<?php echo base_url(); ?>Front/downloads_description/<?php echo $row->id; ?>" title="">
										<img src="<?php echo base_url(); ?>upload/downloads/<?php echo $row->featured_image; ?>" class="" alt="" title="">
									</a>
								</div-->
								<div class="event-details">
									<div class="event-meta">
										<span class="fa fa-calendar" style="color: #73d5f0;"> </span> <?php echo date("d M Y", strtotime($row->udate)); ?>
									</div>
									<h2 style="margin-bottom: 0px;"><a href="<?php echo base_url(); ?>Front/downloads_description/<?php echo $row->id; ?>"><?php echo substr($row->title,0,40).'.'; ?></a></h2>
									<!--div class="event-excerpt">
										<p><?php echo substr($row->description,0,200); ?></p>
									</div-->
								</div>
							</div>
						<?php
							}
						?>
						
                    </div>      
                    <!--dt-sc-one-half ends-->
                    <!--dt-sc-one-half starts-->
                    
                    <!--dt-sc-one-half ends--> 
                    <div class="dt-sc-hr-very-small"></div>  
					<div class="dt-sc-hr"></div>
					<div class="dt-sc-hr"></div>
                    <!--dt-sc-one-half ends--> 
                </div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
                <!--container ends-->
             
               <!--primary ends-->
        </div>
        <!--main ends-->