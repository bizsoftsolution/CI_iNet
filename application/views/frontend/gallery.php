
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
            	<section id="primary" class="content-full-width">
                    <div class="dt-sc-portfolio-container">
                        <?php 
						$data7 = $this->db->get("tbl_gallery")->result();
						foreach($data7 as $row)
						{
							$egallery = explode(',', trim($row->images,','));
							//echo $egallery[0];
						?>
						<div class="portfolio dt-sc-one-fourth column first testgallery" style="margin: 15px;">
                            <div class="portfolio-thumb">
                            	<!--img class="item-mask" src="images/portfolio-mask.png" alt="" title=""-->
                                <img src="<?php echo base_url(); ?>upload/gallery/<?php echo $egallery[0]; ?>" alt="" title="">
                                <div class="image-overlay">
                                    <a href="<?php echo base_url(); ?>Front/view/<?php echo $row->id; ?>" class="link" style="left: 50%;"><span class="fa fa-link"></span></a>
                                    <!--a href="images/cartoon1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a-->
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="<?php echo base_url(); ?>Front/view/<?php echo $row->id; ?>"><?php echo substr($row->title,0,30).'.'; ?></a></h5>
                                    <!-- <p><a href="#">Cool</a>, <a href="#">Fun</a></p> -->
                                </div>
								<a href="<?php echo base_url(); ?>Front/view/<?php echo $row->id; ?>" class="dt-sc-button small" style="margin: 0px 0 20px 0px;">View More</a>
                            </div>
                        </div>
						<?php
								//echo $res;
								//break;								
							
						}
						?>
                        

                    </div>
                    <!--dt-sc-portfolio-container ends-->
                </section>
                <!--primary ends-->
            </div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
			<div class="container">&nbsp;</div>
            <!--container ends-->
        </div>
        <!--main ends-->