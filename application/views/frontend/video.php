        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Video Gallery</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Video Gallery</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
                    
                    <!--dt-sc-portfolio-container starts-->
                    <div class="dt-sc-portfolio-container">
                        
						<?php 
						$data7 = $this->db->get("tbl_video")->result();
						foreach($data7 as $row)
						{
							$url = $row->youtube_url;
							$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
							$longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

							if (preg_match($longUrlRegex, $url, $matches)) {
							$id = $matches[count($matches) - 1];
							}

							if (preg_match($shortUrlRegex, $url, $matches)) {
							$id = $matches[count($matches) - 1];
							}
						?>
                        <div class="portfolio column dt-sc-one-half first" style="    margin-left: 9px;">
							<div class="portfolio-thumb">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
						   
						</div>
					   <?php 
						}
					   ?>
                        
                    </div>
                    <!--dt-sc-portfolio-container ends-->
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
 