 <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Product</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Product</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
				<h2 class="dt-sc-hr-green-title" style="padding-top:30px;"> Our Products </h2>
            	<section id="primary" class="content-full-width" style="margin:0px 0px;    padding: 10px 25px 0 10px;">
					
					<ul class="products">
						<?php 
							$data7 = $this->db->get("tbl_product")->result();
							foreach($data7 as $row)
							{
						?>
                        <li class="column dt-sc-one-fourth first" style="margin:8px;border-radius: 5px;    border: 3px solid #faa618;">
                            
                            <!--div class="product-details">
                                <!--h5><a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>"> <?php echo substr($row->title,0,20).'.'; ?></a></h5->
                                <h5 style="    margin: 0 80px;"><a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>"><span class="price" style="background: #73d5f0;
								border: 1px solid #73d5f0;padding: 4px 14px;color: #000;cursor: pointer;"> View </span></a></h5>
                            </div-->
							<?php 
							if($row->id == '1')
							{
								?>
							<div class="product-thumb">
                                <a href="<?php echo base_url(); ?>Front/i_mineral">
                                    <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
                                </a>
                            </div>
							<div class="product-details" style="padding:0px;">
                                <!--h5><a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>"> <?php echo substr($row->title,0,20).'.'; ?></a></h5-->
                                <!--h5 style="    margin: 0 80px;text-align:center" >
								<a href="<?php echo base_url(); ?>Front/i_mineral"><span class="price" style="background: #73d5f0;border: 1px solid #73d5f0;padding: 4px 14px;color: #000;cursor: pointer;"> View </span></a>
								</h5-->
								<p align="center"><a href="<?php echo base_url(); ?>Front/i_mineral" class="dt-sc-button small" style="text-align:center;padding: 4px 14px;background: #73d5f0;color:#000;font-weight:bold;">View</a></p>
							</div>
							<?php
							}
							else if($row->id == '2')
							{
							?>
							<div class="product-thumb">
                                <a href="<?php echo base_url(); ?>Front/product_v_card">
                                    <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
                                </a>
                            </div>
							<div class="product-details" style="padding:0px;">
								<p align="center"><a href="<?php echo base_url(); ?>Front/product_v_card" class="dt-sc-button small" style="text-align:center;padding: 4px 14px;background: #73d5f0;color:#000;font-weight:bold;">View</a></p>
							</div>
							<?php
							}
							else if($row->id == '3')
							{
							?>
							<div class="product-thumb">
                                <a href="<?php echo base_url(); ?>Front/matcha">
                                    <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
                                </a>
                            </div>
							<div class="product-details" style="padding:0px;">
								<p align="center"><a href="<?php echo base_url(); ?>Front/matcha" class="dt-sc-button small" style="text-align:center;padding: 4px 14px;background: #73d5f0;color:#000;font-weight:bold;">View</a></p>
							</div>
							<?php 
							}
							else if($row->id == '4')
							{
							?>
							<div class="product-thumb">
                                <a href="<?php echo base_url(); ?>Front/lingzhi">
                                    <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
                                </a>
                            </div>
							<div class="product-details" style="padding:0px;">
								<p align="center"><a href="<?php echo base_url(); ?>Front/lingzhi" class="dt-sc-button small" style="text-align:center;padding: 4px 14px;background: #73d5f0;color:#000;font-weight:bold;">View</a></p>
							</div>
							<?php 
							}
							else
							{
							?>
							<div class="product-thumb">
                                <a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>">
                                    <img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
                                </a>
                            </div>
							<div class="product-details" style="padding:0px;">
								<p align="center"><a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>" class="dt-sc-button small" style="text-align:center;padding: 4px 14px;background: #73d5f0;color:#000;font-weight:bold;">View</a></p>
							</div>
							<?php
							}
							?>
                        </li>
						<?php 
							}
						?>
                        
                    </ul>
					<div class="dt-sc-hr"></div>
					<div class="dt-sc-hr"></div>
                    <!--div class="dt-sc-portfolio-container">
                        <?php 
							$data7 = $this->db->get("tbl_product")->result();
							foreach($data7 as $row)
							{
						?>
							<div class="portfolio dt-sc-one-third column first" style="    padding: 15px;">
								<div class="portfolio-thumb">
									<!--img class="item-mask" src="<?php echo base_url(); ?>assets/frontend/images/portfolio-mask.png" alt="" title=""->
									<img src="<?php echo base_url(); ?>upload/products/<?php echo $row->featured_image; ?>" alt="" title="">
									<div class="image-overlay">
										<a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>" class="link" style="left: 48%;"><span class="fa fa-link"></span></a>
										<!--a href="<?php echo base_url(); ?>assets/frontend/images/cartoon1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a->
									</div>
								</div>
								<div class="portfolio-detail">
									<div class="portfolio-title">
										<h5><a href="<?php echo base_url(); ?>Front/product_description/<?php echo $row->id; ?>"> <?php echo substr($row->title,0,40).'.'; ?></a></h5>
										<!-- <p><a href="#">Cool</a>, <a href="#">Fun</a></p> ->
									</div>
								</div>
							</div>
						<?php
							}
						?>

                        
                        
                    </div-->
                    <!--dt-sc-portfolio-container ends-->
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->