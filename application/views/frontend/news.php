        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>News</h1>
                    <div class="breadcrumb">
                        <a href="">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">News</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
                 
					<?php 
					$newsDet = $this->db->order_by('udate', 'DESC')->get('tbl_news')->result();
					foreach($newsDet as $row)
					{
					
					?>			
				 
				 
                	<div class="column dt-sc-one-half first" >
                    	<article class="blog-entry">
                            <div class="blog-entry-inner">
                                <div class="entry-meta">
                                    <!--a href="<?php echo base_url(); ?>Front/news_description/<?php echo $row->id;?>" class="blog-author"><img src="<?php echo base_url('assets/frontend/images/inetlogo.png');?>" alt="" title=""></a-->
                                    <div class="date">
                                        <span> <?php echo date('d' ,strtotime($row->udate));?> </span> 
                                        <p> <?php echo date('M' ,strtotime($row->udate));?> <br> <?php echo date('Y' ,strtotime($row->udate));?> </p> 
                                    </div>
                                    <!--<a href="#" class="comments">
                                        12 <span class="fa fa-comment"> </span>
                                    </a>-->
                                    <!--a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a-->	
                                </div>		
                                <div class="entry-thumb">
                                    <a href="<?php echo base_url(); ?>Front/news_description/<?php echo $row->id;?>"><img src="<?php echo base_url();?>/upload/news/<?php echo $row->featured_image; ?>" class="sli_image" style="height:194px;" alt="" title=""></a>
                                </div>		
                                <div class="entry-details">	
                                    <div class="entry-title">
                                        <h3><a href="<?php echo base_url(); ?>Front/news_description/<?php echo $row->id;?>"> <?php echo substr($row->title,0,40).'.'; ?> </a></h3>
                                    </div>			
                                    <!--entry-metadata ends-->	
                                    <!--div class="entry-body">
                                        <p style="text-align:justify;"><?php echo substr($row->description,0,200); ?></p>
                                    </div-->	 		
                                    <a href="<?php echo base_url(); ?>Front/news_description/<?php echo $row->id;?>" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                </div>	
                            </div>
                        </article>
                	</div>
					<?php
					
					}
					
					?>
					 <div class="dt-sc-hr"></div> <div class="dt-sc-hr"></div>
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
