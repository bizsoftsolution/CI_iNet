        <!--main starts-->
		<?php 
			$news = $this->db->get_where('tbl_news',array('id'=>$id))->row();
		?>
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Current News</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <a href="<?php echo base_url('Front/news'); ?>">News</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Current News</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" ><!--class="with-sidebar"-->
                 
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <!--a href="#" class="blog-author"><img src="<?php echo base_url('assets/frontend/images/inetlogo.png');?>" alt="" title=""></a-->
                                <div class="date">
                                    <span> <?php echo date('d' ,strtotime($news->udate));?> </span> 
                                    <p> <?php echo date('M' ,strtotime($news->udate));?> <br> <?php echo date('Y' ,strtotime($news->udate));?> </p> 
                                </div>
                                <!--a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a-->
                                <!--a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a-->	
                            </div>		
                            <div class="entry-thumb">
                               <img src="<?php echo base_url();?>/upload/news/<?php echo $news->featured_image; ?>" alt="" title="" style="width:100%;">
                            </div>		
                            <div class="entry-details">	
                                <div class="entry-title">
                                    <h3> <?php echo $news->title; ?> </h3>
                                </div>			
                                <!--entry-metadata ends-->	
                                <div class="entry-body" style="text-align:justify;">
                                    <p ><?php echo $news->description; ?></p>
                                    <!--<blockquote class="alignright">
                                        <q>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Maecenas nec odio et ante tincidunt tempus.</q> 
                                    </blockquote>-->
                                    
                                </div>	 		
                            </div>	
                        </div>
                    </article>
                    <!--commententries starts-->
                   <!--commententries ends-->
                </section>
                <!--primary ends-->
                
                <!--secondary starts-->
                <!--section id="secondary">
          
                	
                    <aside class="widget widget_text">
                        <h3 class="widgettitle">Vision</h3>
                        <p>In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique <a href="#" class="highlighter">senectus</a> et netus et malesuada fames ac turpis egestas. </p>
                        <p>Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi sagittis. Integer enim odio.</p>
					</aside>
                    
                    <aside class="widget widget_text">
                    	<h3 class="widgettitle">Mission</h3>
                        <p>Our methods of teaching and level of quality instructors all add up to a well-rounded experience.</p>
                    	<iframe src="http://player.vimeo.com/video/21195297" width="420" height="200"></iframe>
                    </aside>
                    
                    
                </section-->
                <!--secondary ends-->
                
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
 