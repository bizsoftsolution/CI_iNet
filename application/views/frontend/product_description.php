<!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Product Description</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <a href="<?php echo base_url(); ?>Front/product">Product</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Product Description</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width" style="margin: 50px 0px;">
					
					<?php 
					foreach($product_description as $row)
					{
					?>
                	<article class="portfolio-single">
                        <!--div class="dt-sc-one column">
                            <div class="portfolio-slider-container">
                                <ul class="portfolio-slider">
									<?php 
										$turl = explode(",", trim($row->thumbnail_image,","));
										foreach($turl as $res1)
										{
									?>
                                    <li> <img src="<?php echo base_url(); ?>upload/products/<?php //echo $res1; ?>" alt="" title="" style="width: 100%;"> </li>
									<?php 
										}
									?>
									
                                </ul>
                            </div>
                        </div--> 
                        <!--div class="dt-sc-hr"></div-->
                        <div class="dt-sc-one column" style="width:100%;margin: 0px 0px 0px 0px;">  
                            <h2 class="dt-sc-hr-green-title"><?php echo $row->title; ?></h2>
                            <p style="text-align:justify;"><?php echo $row->description; ?></p>
                        </div>
                        
                    </article>
                    <?php 
					}
					?>
                    <div class="dt-sc-hr"></div>
                    <!--h2 class="dt-sc-hr-green-title">Testimonials</h2>
					
					<?php 
					foreach($product_description as $row)
					{
						
						$yurl = explode(",", trim($row->youtube_url,','));
						foreach($yurl as $res)
						{
							if($res !="")
							{
						//echo $res."<br>";
						$url = $res;
						$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
						$longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

						if (preg_match($longUrlRegex, $url, $matches)) {
						$id = $matches[count($matches) - 1];
						}

						if (preg_match($shortUrlRegex, $url, $matches)) {
						$id = $matches[count($matches) - 1];
						}
					?>
                    <div class="portfolio column dt-sc-one-half first">
                        <div class="portfolio-thumb">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php
							}
						}
					}
					?>
                  -->
                   <!--div class="portfolio column dt-sc-one-half first">
                        <div class="portfolio-thumb">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/fBHMigFahZ4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                       
                    </div>
                    
                    <div class="portfolio column dt-sc-one-half first">
                        <div class="portfolio-thumb">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/66QmPP0vluk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div-->
                
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        <!--main ends-->